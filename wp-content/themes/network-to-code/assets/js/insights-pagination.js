(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var blocks = document.querySelectorAll('[data-insights-block]');

    Array.prototype.forEach.call(blocks, function (block) {
      var form = block.querySelector('.webinar-filters');
      var searchInput = block.querySelector('[data-insights-search]');
      var debounceTimer = null;
      var requestController = null;

      if (!form) {
        return;
      }

      function findMatchingBlock(documentFragment) {
        var blockId = block.getAttribute('data-insights-block-id');
        var candidates = documentFragment.querySelectorAll('[data-insights-block]');

        return Array.prototype.slice.call(candidates).find(function (candidate) {
          return candidate.getAttribute('data-insights-block-id') === blockId;
        });
      }

      function navigate(url, addHistory) {
        if (url.origin !== window.location.origin || typeof window.fetch !== 'function' || typeof window.DOMParser !== 'function' || typeof window.AbortController !== 'function' || !window.history || typeof window.history.pushState !== 'function') {
          window.location.assign(url.toString());
          return;
        }

        if (requestController) {
          requestController.abort();
        }

        requestController = new AbortController();

        fetch(url.toString(), {
          method: 'GET',
          credentials: 'same-origin',
          headers: {
            'Accept': 'text/html'
          },
          signal: requestController.signal
        }).then(function (response) {
          if (!response.ok) {
            throw new Error('Unable to load webinar results.');
          }

          return response.text();
        }).then(function (html) {
          var parsedDocument = new DOMParser().parseFromString(html, 'text/html');
          var nextBlock = findMatchingBlock(parsedDocument);
          var currentWebinars = block.querySelector('.ondemand-webinars');
          var nextWebinars = nextBlock && nextBlock.querySelector('.ondemand-webinars');

          if (!nextWebinars || !currentWebinars) {
            throw new Error('Webinar results were not found.');
          }

          currentWebinars.innerHTML = nextWebinars.innerHTML;
          var ctaSpinner = block.querySelector('.cta-spinner');
          if (ctaSpinner) {
            ctaSpinner.style.display = 'none';
          }

          var nextForm = nextBlock.querySelector('.webinar-filters');
          if (nextForm) {
            Array.prototype.forEach.call(form.elements, function (field) {
              var nextField = nextForm.elements[field.name];
              if (nextField) {
                field.value = nextField.value;
              }
            });
          }

          if (addHistory) {
            window.history.pushState({ insights: true }, '', url.toString());
          }
        }).catch(function (error) {
          if (error.name !== 'AbortError') {
            window.location.assign(url.toString());
          }
        });
      }

      form.addEventListener('submit', function (event) {
        event.preventDefault();
        var url = new URL(form.action || window.location.href, window.location.href);
        url.search = new URLSearchParams(new FormData(form)).toString();
        navigate(url, true);

       
      });

      Array.prototype.forEach.call(form.querySelectorAll('select'), function (select) {
        select.addEventListener('change', function () {
        //cta-spinner show loader
        var ctaSpinner = block.querySelector('.cta-spinner');
        if (ctaSpinner) {
          ctaSpinner.style.display = 'block';
        }
          form.dispatchEvent(new Event('submit', { cancelable: true }));

         
        });
      });

      block.addEventListener('click', function (event) {
        var link = event.target.closest('.insights-pagination a');

        if (!link || link.origin !== window.location.origin) {
          return;
        }

        event.preventDefault();
        navigate(new URL(link.href), true);

        //scroll to top of the block after pagination click
        block.scrollIntoView({ behavior: 'smooth' });
      });

      if (searchInput) {
        searchInput.addEventListener('input', function () {
          window.clearTimeout(debounceTimer);
          debounceTimer = window.setTimeout(function () {
            form.dispatchEvent(new Event('submit', { cancelable: true }));
          }, 350);
        });
      }

      window.addEventListener('popstate', function () {
        navigate(new URL(window.location.href), false);
      });

       
    });
  });
})();
