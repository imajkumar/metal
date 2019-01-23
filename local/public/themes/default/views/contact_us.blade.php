
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="content" class="ng-view ng-scope" autoscroll="true"><div class="ng-scope">
  
    <section id="slide-3" class="homeSlide">
        <div class="bcg">
            <div class="abnav">
                <ul>
                    <li><a href="/about-us">About Us</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="/our-team">Our Team</a></li>
                    <li><a href="/news" target="_blank">News</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>
                </ul>
            </div>
            <div class="hsContainer">
                <div class="hsContent">
                    <p>CONTACT US</p>
                    <h4>We’re ready to lead you into the future of Steel marketing</h4>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="contcbx">
            <div class="top-spc8">
                <div class="contcbxh2">Get in touch with us</div>
                <div class="contcbxl top-spc9">
                    <div class="ofca">
                        <div class="contcbxlh5">Our Office Address:</div>
                        <i class="fa fa-building-o ofcaicon" aria-hidden="true"></i><p>Green Boulevard, Sec 62, Noida, <br>Uttar Pradesh 201309</p>
                        <div class="clr"></div>
                        <i class="fa fa-phone ofcaicon1" aria-hidden="true"></i><p class="top-spc porstion">9555-066-066</p>

                    </div>

                    <div class="clr"></div>
                    <div class="contcbxlh5 top-spc6">Our Customer Care Team is Available 24x7 for anything you need:</div>
                    <ul>
                        <li>For any help is adding your products or how to become a seller on Metalbaba</li>
                        <li>For any help in difficulty in using our app or website</li>
                        <li>For any suggestions or feedback</li>
                    </ul>
                </div>
                <div class="contcbxr top-spc4 bot-spc">
                    <label>Name *</label>
                    <input data-ng-model="feedback_name" type="text" placeholder="Name" class="contfield ng-pristine ng-untouched ng-valid ng-empty">
                    <label class="top-spc2">Email *</label>
                    <input data-ng-model="feedback_email" type="text" placeholder="Email" class="contfield ng-pristine ng-untouched ng-valid ng-empty">
                    <label class="top-spc2">Mobile *</label>
                    <input data-ng-model="feedback_mobile" type="text" placeholder="Mobile" class="contfield ng-pristine ng-untouched ng-valid ng-empty">
                    <label class="top-spc2">Suggestion *</label>
                    <select data-ng-model="feedback_id" class="contfield ng-pristine ng-untouched ng-valid ng-not-empty"><option value="? number:0 ?"></option>
                        <!-- ngRepeat: feedback in feedback_list -->
                    </select>
                    <label class="top-spc2">Subject *</label>
                    <input data-ng-model="feedback_subject" type="text" placeholder="Subject" class="contfield ng-pristine ng-untouched ng-valid ng-empty">
                    <label class="top-spc2">Message *</label>
                    <textarea data-ng-model="feedback_message" class="contfield ng-pristine ng-untouched ng-valid ng-empty"></textarea>
                    <button type="button" class="uniq-btn top-spc4" data-ng-click="submitFeedback();">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js.php?file=imagesloaded.js" class="ng-scope"></script>
<script type="text/javascript" class="ng-scope">
$(document).ready(function () {

    //Disable part of page
    $('.porstion').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
    $(".porstion").on("contextmenu",function(e){
        return false;
    });
});
</script></div>

  </div>
</div>
</div>
