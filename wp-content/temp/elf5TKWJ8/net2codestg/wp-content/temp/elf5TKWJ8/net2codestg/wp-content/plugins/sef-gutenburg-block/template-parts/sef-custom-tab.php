<?php

/**
* Layout of sef Custom Tabs.
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


?>

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
                <section class="service-detail before-none">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="px-lg-2 title-box mb-5">
                          <h4
                            class="fs-24 zilla text-start text-capitalize my-3"
                          >
                            Your network has become large, dynamic, and
                            complex. It’s time to move beyond spreadsheets, ad
                            hoc scripting, and vendor-specific tooling.
                          </h4>
                          <h5 class="sub-title text-start">
                            Network to Code designs and develops holistic
                            solutions to create a Single Source of Truth to
                            define the intended state of your network
                            infrastructure.
                          </h5>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="row gy-md-5 gx-md-5">
                          <div class="col-md-12">
                            <div class="detail-box" data-magnetic>
                              <h3>
                                <img
                                  src="../assets/images/source-of-truth-1.svg"
                                  alt=""
                                />
                                Single Source of Truth
                              </h3>
                              <p>
                                Manage the network. Don’t let the network
                                manage you.
                              </p>
                              <p>
                                IT infrastructure today is mostly driven by
                                the configurations that reside on the large
                                number of devices and databases in production,
                                not by the requirements, intent, and policies
                                you define. Source of Truth solutions, such as
                                Nautobot, provide an authoritative, or
                                declarative, approach to managing the data
                                used for your device configurations and
                                managing inventory.
                              </p>
                              <p>
                                By maintaining your data centrally and
                                creating vendor, device, version independent
                                configuration data models, you can be
                                confident that your network is configured the
                                way you intend it to be.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="detail-box" data-magnetic>
                              <h3>
                                <img
                                  src="../assets/images/source-of-truth-2.svg"
                                  alt=""
                                />
                                Source of Truth Data Population
                              </h3>
                              <p>
                                Onboarding an existing brownfield network into
                                a source of truth is not an easy task. Do you
                                need to manually add each of your thousands of
                                devices? Network to Code has developed custom
                                tools and processes to dynamically and
                                accurately populate your source of truth,
                                identifying any deviations from standards and
                                non-compliant devices in the process.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="detail-box" data-magnetic>
                              <h3>
                                <img
                                  src="../assets/images/source-of-truth-3.svg"
                                  alt=""
                                />
                                Source of Truth Compliance
                              </h3>
                              <p>
                                Once you have your Source of Truth
                                implemented, you need to maintain visibility
                                to ensure your intended state is the actual
                                state. Network to Code offers lifecycle
                                solutions to continuously ensure that the data
                                defined in your source of truth is on the
                                device. When it deviates, you have the option
                                to generate alerts or perform
                                auto-remediation.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="tab-pane container fade" id="telemetry">
                <section
                  class="service-detail network-telemetry-details before-none"
                >
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-112">
                        <div class="px-lg-2 title-box mb-5">
                          <h4
                            class="fs-24 zilla text-start text-capitalize my-3"
                          >
                            As You Start Introducing Automation Into Your
                            Environment, The Need For Visibility Becomes Even
                            More Critical.
                          </h4>
                          <h5 class="sub-title text-start">
                            Network visibility is critical to any
                            event-driven, closed loop intent-based network.
                            Network to Code’s network telemetry and analytics
                            solutions apply modern data management and
                            enrichment techniques for deeper insight into the
                            state of the network, well beyond traditional
                            monitoring and polling.
                          </h5>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row gy-4">
                          <div class="col-md-12">
                            <div class="telemetry-detail-box d-flex gap-3">
                              <div class="telemetry-img">
                                <img
                                  src="../assets/images/telemetry-1.svg"
                                  alt=""
                                  class="img-fluid"
                                />
                              </div>
                              <div class="telemetry-content">
                                <h4>Intent-based Networking</h4>
                                <p>
                                  Intent-based network automation solutions
                                  rely on closed-loop systems. Closed-loop
                                  systems must have mechanisms to collect any
                                  piece of data from network devices and
                                  controllers while allowing users to enrich
                                  that data, allowing decisions to be made to
                                  act on or react to events on the network.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="telemetry-detail-box d-flex gap-3">
                              <div class="telemetry-img">
                                <img
                                  src="../assets/images/telemetry-2.svg"
                                  alt=""
                                  class="img-fluid"
                                />
                              </div>
                              <div class="telemetry-content">
                                <h4>Telemetry Streamingg</h4>
                                <p>
                                  Replace SNMP with a model driven interface
                                  that will let you extract more granular
                                  information from your network devices.
                                  Telemetry streaming also opens the door to
                                  new use cases around event driven automation
                                  and auto-remediation.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="telemetry-detail-box d-flex gap-3">
                          <div class="telemetry-img">
                            <img
                              src="../assets/images/telemetry-3.svg"
                              alt=""
                              class="img-fluid"
                            />
                          </div>
                          <div class="telemetry-content">
                            <h4>Monitoring and Alerting</h4>
                            <p>
                              Leverage the power of a whole new generation of
                              monitoring tools tightly integrated into your
                              automation platform to reduce time to respond,
                              react, and remediate.
                            </p>
                            <p>
                              Custom monitoring and alerting solutions can
                              generate the right actionable alerts specific to
                              your environment and allow you to identify and
                              solve issues before they impact the quality of
                              your service.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="tab-pane container fade" id="self-services">
                <section class="service-detail before-none">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="px-lg-2 title-box mb-5">
                          <h4
                            class="fs-24 text-start zilla text-capitalize my-3"
                          >
                            Today’s Consumers Of Network Information Should
                            Have Fast And Easy Access To The Data They Need To
                            Do Their Jobs.
                          </h4>
                          <h5 class="sub-title text-start">
                            Network engineering teams are often bogged down
                            with requests for basic network data from
                            developers, help desks, lifecycle management, and
                            other teams. Time spent addressing these requests
                            can significantly cause delays in project
                            delivery, troubleshooting, and create distractions
                            from more strategic and time sensitive
                            initiatives.
                          </h5>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="row gy-md-5 gx-md-5">
                          <div class="col-md-12">
                            <div class="detail-box" data-magnetic>
                              <h3>
                                <img
                                  src="/assets/images/self-service-1.svg"
                                  alt=""
                                />
                                ITSM-Driven Network Operations
                              </h3>
                              <p>
                                Integrate ITSM platforms, such as ServiceNow,
                                to automate common change requests while
                                auto-generating ticket creation, updates, and
                                close-out providing the necessary audit trails
                                and governance your organization requires..
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="detail-box" data-magnetic>
                              <h3>
                                <img
                                  src="/assets/images/self-service-2.svg"
                                  alt=""
                                />
                                ChatOps For Network Automation
                              </h3>
                              <p>
                                Imagine being able to receive an alert
                                directly in chat. Imagine being able to enable
                                other teams to get data they need with ease or
                                make authorized changes directly from chat.
                                Whether it be for the network team, the
                                systems team, developers requesting network
                                resources, or the service desk who just needs
                                to bounce a port. It’s possible to query
                                CMDBs, IPAMs, flow collectors, any device or
                                controller, or any cloud-service to operate
                                the network directly from chat. Network to
                                Code’s ChatOps solutions are multi-platform
                                (Slack, MS Teams, Webex Teams, etc.) and
                                integrate with any device or any tool for both
                                read-only and read-write automation lowering
                                the barrier for consumption of network
                                automation.
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