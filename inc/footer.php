<?php
function enviar() {
    echo "string";
};
?>
<footer id="footer">
    <div class="container">
        <!-- <button type="button" class="botonContactForm">Apply Now!</button>-->
        <nav class="footNav">
            <ul>
                <li><a title="Advice" href="advice.php">Advice</a></li>
                <li>
                    <a title="Advice for parents" href="advice-partner.php">Advice for parents</a>
                </li>
                <li>
                    <a title="FAQS" href="faqs.php">FAQS</a>
                </li>
                <li>
                    <a title="Terms" href="terms.php">Terms</a>
                </li>
                <li>
                    <a title="Privacy" href="privacy.php">Privacy</a>
                </li>
            </ul>
        </nav>
    </div>
</footer>
<!-- footer -->


<div class="wow-modal-botton-1 wow_modal_button_right" style="width:150px;margin-top:75px" id="wow-modal-id-1">Apply now!</div>
<div id="wow-modal-overlay-1" class="wow-modal-overlay">
    <div id="wow-modal-overclose-1" class="wow-modal-overclose"></div>
    <div id="wow-modal-window-1" class="wow-modal-window">
        <div id="wow-modal-close-1">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x" id="close-circle-1"></i>
                <i class="fa fa-times fa-stack-1x fa-inverse" id="close-times-1"></i>
            </span>
        </div>
        <h2 style="text-align: center;">Apply Now!</h2>
        <h4>TAKE YOUR FIRST STEP TODAY</h4>
        <p style="text-align: center;"></p>
        <div role="form" class="wpcf7" id="wpcf7-f2264-o3" dir="ltr" lang="en-US">
            <div class="screen-reader-response"></div>
            <form action="enviar();" method="post" class="wpcf7-form" enctype="multipart/form-data" novalidate="novalidate">
                <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="2264">
                    <input type="hidden" name="_wpcf7_version" value="4.9.2">
                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2264-o3">
                    <input type="hidden" name="_wpcf7_container_post" value="0">
                </div>
                <h4>Personal Information</h4>
                <div class="row">
                    <div class="col-md-6 w75">
                        <span class="wpcf7-form-control-wrap full-name">
                            <input type="text" name="full-name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Full name">
                        </span>
                    </div>
                    <div class="col-md-6 w25">
                        <span class="wpcf7-form-control-wrap age">
                            <input type="number" name="age" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number form-control" aria-required="true" aria-invalid="false" placeholder="Age">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span class="wpcf7-form-control-wrap email">
                            <input type="email" name="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email Address">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <span class="wpcf7-form-control-wrap mobile">
                            <input type="tel" name="mobile" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" aria-required="true" aria-invalid="false" placeholder="Phone (Mobile)">
                        </span>
                    </div>
                    <div class="col-md-6">
                        <span class="wpcf7-form-control-wrap phoneParents">
                            <input type="text" name="phoneParents" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Phone (Parents if U 18)">
                        </span>
                    </div>
                </div>
                <h4>Contact Information</h4>
                <div class="row">
                    <div class="col-md-4">
                        <span class="wpcf7-form-control-wrap city">
                            <input type="text" name="city" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="City">
                        </span>
                    </div>
                    <div class="col-md-4">
                        <span class="wpcf7-form-control-wrap state">
                            <input type="text" name="state" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="State">
                        </span>
                    </div>
                    <div class="col-md-4">
                        <span class="wpcf7-form-control-wrap zip">
                            <input type="text" name="zip" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Zip">
                        </span>
                    </div>
                </div>
                <h4>Select recent photo</h4>
                <div class="row">
                    <div class="col-md-12">
                        <span class="wpcf7-form-control-wrap pic">
                            <input type="file" name="pic" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 transparent">
                        <span class="wpcf7-form-control-wrap notAgency">
                            <span class="wpcf7-form-control wpcf7-checkbox wpcf7-exclusive-checkbox form-control">
                                <span class="wpcf7-list-item first last">
                                    <input type="checkbox" name="notAgency" value="I understand that Into Modeling is not an agency">
                                    <span class="wpcf7-list-item-label">I understand that Into Modeling is not an agency</span>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <input type="submit" value="Apply Now" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-lg">
                        <span class="ajax-loader"></span>
                    </div>
                </div>
                <div class="wpcf7-response-output wpcf7-display-none"></div>
            </form>
        </div>
        <p>
            
        </p>
    </div>
</div>

</body>

</html>

