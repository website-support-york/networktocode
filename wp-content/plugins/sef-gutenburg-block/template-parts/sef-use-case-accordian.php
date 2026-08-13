<?php

/**
* Layout of sef Use Case Accordian.
**/

// Create id attribute allowing for custom "anchor" value.
$id = 'iframe_' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}



?>

<!-- neutobot use case -->
<section class="neutobot-use-case">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/nautobot-usecase.png"
        alt=""
        class="use-case-img wow animate__animated animate__fadeInUp delay1"
      />
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div
              class="title-box text-start wow animate__animated animate__fadeInUp"
            >
              <h3 class="section-title text-white mt-3">Nautobot Use Cases</h3>
              <p class="">
                Nautobot was initially developed as a fork of the NetBox
                project.
              </p>
            </div>
            <div class="future-accordion w-90">
              <div
                class="accordion accordion-flush wow animate__animated animate__fadeInUp delay2"
                id="accordionFlushExample"
              >
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseOne"
                      aria-expanded="false"
                      aria-controls="flush-collapseOne"
                    >
                      Flexible source of truth for networking
                    </button>
                  </h2>
                  <div
                    id="flush-collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <p>
                        Nautobot is more than documentation. Nautobot has
                        integrations and extensibility to truly power network
                        automation solutions. Nautobot has robust platform APIs
                        that include traditional RESTful (HTTP) APIs, GraphQL
                        APIs, event-driven webhooks, and numerous extensibility
                        features to further enable network automation. Nautobot
                        also uses its extensibility to aggreate disparate data
                        systems creating a Single Source of Truth for network
                        automation solutions.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseTwo"
                      aria-expanded="false"
                      aria-controls="flush-collapseTwo"
                    >
                      Extensible data platform for network automation
                    </button>
                  </h2>
                  <div
                    id="flush-collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <p>
                        Nautobot is more than documentation. Nautobot has
                        integrations and extensibility to truly power network
                        automation solutions. Nautobot has robust platform APIs
                        that include traditional RESTful (HTTP) APIs, GraphQL
                        APIs, event-driven webhooks, and numerous extensibility
                        features to further enable network automation. Nautobot
                        also uses its extensibility to aggreate disparate data
                        systems creating a Single Source of Truth for network
                        automation solutions.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseThree"
                      aria-expanded="false"
                      aria-controls="flush-collapseThree"
                    >
                      Platform for network automation applications
                    </button>
                  </h2>
                  <div
                    id="flush-collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <p>
                        Nautobot is more than documentation. Nautobot has
                        integrations and extensibility to truly power network
                        automation solutions. Nautobot has robust platform APIs
                        that include traditional RESTful (HTTP) APIs, GraphQL
                        APIs, event-driven webhooks, and numerous extensibility
                        features to further enable network automation. Nautobot
                        also uses its extensibility to aggreate disparate data
                        systems creating a Single Source of Truth for network
                        automation solutions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="learn-use-case mt-5 wow animate__animated animate__fadeInUp delay4"
              >
                <div class="w-100">
                  <p>Learn how Nautobot can drive Network Automation</p>
                </div>
                <div class="w-100 d-flex align-item-center justify-content-end">
                  <a href="" class="btn theme-btn">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>