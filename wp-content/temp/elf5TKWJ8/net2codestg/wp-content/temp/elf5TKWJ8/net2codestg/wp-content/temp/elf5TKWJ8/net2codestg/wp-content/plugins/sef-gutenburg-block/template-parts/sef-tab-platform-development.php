<?php

/**
* Layout of sef Tab view for Platform Development.
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
$sef_tab_talk_background = get_field('sef_tab_talk_background');
$sef_tab_background_image = get_field('sef_tab_background_image');
$sef_tab_main_title = get_field('sef_tab_main_title');
$sef_tab_heading_one = get_field('sef_tab_heading_one');
$sef_tab_heading_two = get_field('sef_tab_heading_two');
$sef_tab_talk_heading = get_field('sef_tab_talk_heading');
$sef_tab_talk_button = get_field('sef_tab_talk_button');
$sef_tab_talk_button_popup = get_field('sef_tab_talk_button_popup');

$sef_tab_one_content = get_field('sef_tab_one_content');

$sef_tab_two_heading = get_field('sef_tab_two_heading');

$sef_tab_two_content = get_field('sef_tab_two_content');

?>


 <!-- new tab view of network automation platform development -->
 <section class="platform-development blog-media">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <ul class="nav nav-tabs wow animate__animated animate__fadeInUp">
                <li class="nav-item nav-blog">
                  <a
                    class="nav-link active"
                    data-bs-toggle="tab"
                    href="#sourceOfTruth"
                    >Source Of Truth</a
                  >
                </li>
                <li class="nav-item nav-event">
                  <a class="nav-link" data-bs-toggle="tab" href="#telemetry"
                    >Telemetry & Analytics</a
                  >
                </li>
                <li class="nav-item nav-event">
                  <a class="nav-link" data-bs-toggle="tab" href="#self-services"
                    >Self Service</a
                  >
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div
                  class="tab-pane container active fade show"
                  id="sourceOfTruth"
                >
                  <h3 class="tab-mb-title">Source of Turth</h3>
                  <section class="service-detail before-none">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                          <div class="px-lg-2 title-box mb-5">
                            <h4
                              class="fs-24 zilla text-center text-capitalize my-3 mb-remove-arrow"
                            >
                              Your Network Has Become Large, Dynamic, And
                              Complex. It’s Time To Move Beyond Spreadsheets, Ad
                              Hoc Scripting, And Vendor-Specific Tooling.
                            </h4>
                            <!-- <h5 class="sub-title text-start">
                              Network to Code designs and develops holistic
                              solutions to create a Single Source of Truth to
                              define the intended state of your network
                              infrastructure.
                            </h5> -->
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="row gy-md-5 gx-md-5">
                            <div class="col-md-12">
                              <div class="detail-box" data-magnetic>
                                <h3>
                                  <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/source-of-truth-1.svg"
                                    alt=""
                                  />
                                  Single Source of Truth
                                </h3>
                                <p>
                                  Manage the network. Don’t let the network
                                  manage you.
                                </p>
                                <p>
                                  With Nautobot as the Single Source of Truth,
                                  provide an authoritative, or declarative,
                                  approach to managing the data used for your
                                  device configurations and ensure your network
                                  is configured the way you intend it to be.
                                </p>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="detail-box" data-magnetic>
                                <h3>
                                  <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/source-of-truth-2.svg"
                                    alt=""
                                  />
                                  Source of Truth Data Population
                                </h3>
                                <p>
                                  Onboarding an existing brownfield network
                                  manually into a source of truth is not an easy
                                  task. Populate Nautobot dynamically and
                                  accurately, identifying any deviations from
                                  standards and non-compliant devices in the
                                  process.
                                </p>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="detail-box" data-magnetic>
                                <h3>
                                  <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/source-of-truth-3.svg"
                                    alt=""
                                  />
                                  Source of Truth Compliance
                                </h3>
                                <p>
                                  Trust the current state of your network.
                                  Continuously ensure the data defined in
                                  Nautobot is applied to the configuration of
                                  your network devices . When it deviates,
                                  generate alerts or perform auto-remediation.
                                </p>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="bg-dark-animation">
                                <img
                                  src="<?php echo get_template_directory_uri(); ?>/assets/images/nautobot-anim.gif"
                                  class="w-50 d-block m-auto"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="tab-pane container fade" id="telemetry">
                  <h3 class="tab-mb-title mt-5">Telemetry & Analytics</h3>
                  <section
                    class="service-detail network-telemetry-details before-none"
                  >
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                          <div class="px-lg-2 title-box mb-5">
                            <h4
                              class="fs-24 zilla text-center text-capitalize my-3 mb-remove-arrow"
                            >
                              Visibility is critical to any event-driven, closed
                              loop intent-based network.
                            </h4>
                            <h5 class="sub-title">
                              Network to Code’s telemetry and analytics
                              solutions apply modern data management and
                              enrichment techniques for deeper insight into the
                              state of the network, well beyond traditional
                              monitoring and polling.
                            </h5>
                          </div>
                        </div>
                        <div class="col-md-12 pb-5 pt-2">
                          <div class="row gy-4">
                            <div
                              class="col-md-6 col-lg-5 align-center order-2 order-sm-1"
                            >
                              <div class="telemetry-detail-box">
                                <div class="telemetry-content">
                                  <h4>
                                    <img
                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/telemetry-1.svg"
                                      alt=""
                                      class="img-fluid"
                                    />
                                    Intent-based Networking
                                  </h4>
                                  <p>
                                    Intent-based network automation solutions
                                    rely on closed-loop systems.  Collect and
                                    enrich any piece of data from the network
                                    and take action on the events in the
                                    network.
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div
                              class="col-md-6 col-lg-6 offset-lg-1 order-1 order-sm-2"
                            >
                              <div class="image-box">
                                <a
                                  data-fancybox="gallery"
                                  data-caption="Intent-based Networking"
                                  href="<?php echo get_template_directory_uri(); ?>/assets/images/telemetry-1.png"
                                >
                                  <div class="position-relative">
                                    <img
                                      class="img-fluid w-100 img-shadow"
                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/telemetry-1.png"
                                    />
                                    <div class="img-overlay-btn">
                                      <span
                                        ><i class="bi bi-arrows-fullscreen"></i
                                      ></span>
                                    </div>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 pb-5 pt-2">
                          <div class="row gy-4">
                            <div class="col-md-6 col-lg-6">
                              <div class="image-box">
                                <a
                                  data-fancybox="gallery"
                                  data-caption="Monitoring and Alerting"
                                  href="<?php echo get_template_directory_uri(); ?>/assets/images/telemetry-2.png"
                                >
                                  <div class="position-relative">
                                    <img
                                      class="img-fluid w-100 img-shadow"
                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/telemetry-2.png"
                                    />
                                    <div class="img-overlay-btn">
                                      <span
                                        ><i class="bi bi-arrows-fullscreen"></i
                                      ></span>
                                    </div>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div
                              class="col-md-6 col-lg-5 offset-lg-1 align-center"
                            >
                              <div class="telemetry-detail-box">
                                <div class="telemetry-content">
                                  <h4>
                                    <img
                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/telemetry-3.svg"
                                      alt=""
                                      class="img-fluid"
                                    />
                                    Monitoring and Alerting
                                  </h4>
                                  <p>
                                    Leverage the power of a whole new generation
                                    of monitoring tools tightly integrated into
                                    your automation platform to reduce time to
                                    respond, react, and remediate.  Identify and
                                    solve issues before they impact the quality
                                    of your service.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 pt-2">
                          <div class="row gy-4">
                            <div
                              class="col-md-6 col-lg-5 align-center order-2 order-sm-1"
                            >
                              <div class="telemetry-detail-box">
                                <div class="telemetry-content">
                                  <h4>
                                    <img
                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/telemetry-2.svg"
                                      alt=""
                                      class="img-fluid"
                                    />
                                    Telemetry Streaming
                                  </h4>
                                  <p>
                                    Replace SNMP with a model driven interface
                                    that will let you extract more granular
                                    information from your network devices.
                                    Telemetry streaming opens the door to new
                                    use cases around event driven automation and
                                    auto-remediation.
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div
                              class="col-md-6 col-lg-6 offset-lg-1 order-1 order-sm-2"
                            >
                              <div class="image-box">
                                <a
                                  data-fancybox="gallery"
                                  data-caption="Telemetry Streaming"
                                  href="<?php echo get_template_directory_uri(); ?>/assets/images/telemetry-3.png"
                                >
                                  <div class="position-relative">
                                    <img
                                      class="img-fluid w-100 img-shadow"
                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/telemetry-3.png"
                                    />
                                    <div class="img-overlay-btn">
                                      <span
                                        ><i class="bi bi-arrows-fullscreen"></i
                                      ></span>
                                    </div>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="tab-pane container fade" id="self-services">
                  <h3 class="tab-mb-title mt-4">Self Service</h3>
                  <section class="service-detail before-none">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                          <div class="px-lg-2 title-box mb-5">
                            <h4
                              class="fs-24 text-center zilla text-capitalize my-3 mb-remove-arrow"
                            >
                              Today’s Consumers Of Network Information Should
                              Have Fast And Easy Access To The Data They Need To
                              Do The Job.
                            </h4>
                            <h5 class="sub-title text-center">
                              Minimize distractions and delays by enabling your
                              teams with self-service access to the network data
                              they need to troubleshoot and deliver.
                            </h5>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="row gy-md-5 gx-md-5">
                            <div class="col-md-12">
                              <div class="detail-box" data-magnetic>
                                <h3>
                                  <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/self-service-1.svg"
                                    alt=""
                                  />
                                  ITSM-Driven Network Operations
                                </h3>
                                <p>
                                  Integrate ITSM platforms, such as ServiceNow,
                                  to automate common change requests while
                                  auto-generating ticket creation, updates, and
                                  close-out providing the necessary audit trails
                                  and governance your organization requires.
                                </p>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="detail-box" data-magnetic>
                                <h3>
                                  <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/self-service-2.svg"
                                    alt=""
                                  />
                                  ChatOps For Network Automation
                                </h3>
                                <p>
                                  Receive alerts, pull data, and make authorized
                                  changes directly from any chat platforms such
                                  as Slack, MS Teams, and WebEx.  Query CMDBs,
                                  IPAMs, flow collectors, any device,
                                  controller, or cloud-service to operate the
                                  network directly from chat.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>