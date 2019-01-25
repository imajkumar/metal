
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="content" class="ng-view ng-scope" autoscroll="true"><div class="container-fluid top-spc3 ng-scope">
    <div class="buylbox">
        <div class="content" style="position: relative;">
            <div class="buyfltr bot-spc">
                <!-- ngRepeat: (key,filters) in buylead_filters --><div class="buyfltrin ng-scope" data-ng-repeat="(key,filters) in buylead_filters">
                    <div class="buyfltrl ng-binding">Date Posted</div>
                    <div class="buyfltrr">
                        <ul>
                            <!-- ngRepeat: (k,filter) in filters.filter --><li data-ng-repeat="(k,filter) in filters.filter" class="ng-scope">
                                <input name="checkbox00" id="checkbox00" type="checkbox" data-ng-model="buylead_filters[key].filter[k].checked" data-ng-change="filterData(1);" class="ng-valid ng-dirty ng-valid-parse ng-touched ng-empty">
                                <label for="checkbox00" class="ng-binding">Last 1 Day</label>
                            </li><!-- end ngRepeat: (k,filter) in filters.filter --><li data-ng-repeat="(k,filter) in filters.filter" class="ng-scope">
                                <input name="checkbox01" id="checkbox01" type="checkbox" data-ng-model="buylead_filters[key].filter[k].checked" data-ng-change="filterData(1);" class="ng-valid ng-dirty ng-valid-parse ng-touched ng-empty">
                                <label for="checkbox01" class="ng-binding">Last 2 Days</label>
                            </li><!-- end ngRepeat: (k,filter) in filters.filter --><li data-ng-repeat="(k,filter) in filters.filter" class="ng-scope">
                                <input name="checkbox02" id="checkbox02" type="checkbox" data-ng-model="buylead_filters[key].filter[k].checked" data-ng-change="filterData(1);" class="ng-pristine ng-untouched ng-valid ng-empty">
                                <label for="checkbox02" class="ng-binding">Last 3 Days</label>
                            </li><!-- end ngRepeat: (k,filter) in filters.filter --><li data-ng-repeat="(k,filter) in filters.filter" class="ng-scope">
                                <input name="checkbox03" id="checkbox03" type="checkbox" data-ng-model="buylead_filters[key].filter[k].checked" data-ng-change="filterData(1);" class="ng-pristine ng-untouched ng-valid ng-empty">
                                <label for="checkbox03" class="ng-binding">Last 4 Days</label>
                            </li><!-- end ngRepeat: (k,filter) in filters.filter --><li data-ng-repeat="(k,filter) in filters.filter" class="ng-scope">
                                <input name="checkbox04" id="checkbox04" type="checkbox" data-ng-model="buylead_filters[key].filter[k].checked" data-ng-change="filterData(1);" class="ng-pristine ng-untouched ng-valid ng-empty">
                                <label for="checkbox04" class="ng-binding">Last 5 Days</label>
                            </li><!-- end ngRepeat: (k,filter) in filters.filter --><li data-ng-repeat="(k,filter) in filters.filter" class="ng-scope">
                                <input name="checkbox05" id="checkbox05" type="checkbox" data-ng-model="buylead_filters[key].filter[k].checked" data-ng-change="filterData(1);" class="ng-pristine ng-untouched ng-valid ng-empty">
                                <label for="checkbox05" class="ng-binding">Last 6 Days</label>
                            </li><!-- end ngRepeat: (k,filter) in filters.filter --><li data-ng-repeat="(k,filter) in filters.filter" class="ng-scope">
                                <input name="checkbox06" id="checkbox06" type="checkbox" data-ng-model="buylead_filters[key].filter[k].checked" data-ng-change="filterData(1);" class="ng-pristine ng-untouched ng-valid ng-empty">
                                <label for="checkbox06" class="ng-binding">Last 7 Days</label>
                            </li><!-- end ngRepeat: (k,filter) in filters.filter -->
                        </ul>
                    </div>
                </div><!-- end ngRepeat: (key,filters) in buylead_filters --><div class="buyfltrin ng-scope" data-ng-repeat="(key,filters) in buylead_filters">
                    <div class="buyfltrl ng-binding">Category</div>
                    <div class="buyfltrr">
                        <ul>
                            <!-- ngRepeat: (k,filter) in filters.filter -->
                        </ul>
                    </div>
                </div><!-- end ngRepeat: (key,filters) in buylead_filters -->
            </div>


            <div class="buylboxl bot-spc">
                <div class="pro-f-bar">
                    <div class="pro-f-bar-l ng-binding" id="list-top-div" tabindex="-1">
                        Total 0 Buy Leads available for you
                    </div>
                    <div class="pro-f-bar-r">&nbsp;</div>
                </div>
                <!-- ngIf: buyleads.length -->
                <div class="pro-list-up">
                    <div class="col-sm-12 text-right">
                        <ul class="pagination" id="pagination-buylead"></ul>
                    </div>
                </div>
            </div>
            <div style="display: none; width: 223px; height: 688px; margin: 0px; float: right;"></div><div class="sticky" style="width: 223px; position: static; left: 1060px; top: 80px;">
                <div class="stickyin2">
                    <span class="ng-binding">0</span>
                    <br> Quotes Available
                    <br>
                    <button type="button" class="sticky2btn" data-ng-click="showSubscription('BUYMORE')">Buy More</button>
                </div>
                <div class="stickyin1">
                    <a href="#" data-ng-click="showDashboard('enquiry_list');">
                        <i class="fa fa-envelope-o fasicon" aria-hidden="true"></i>
                        <br>
                        View Message
                    </a>
                </div>
                <div class="stickyin1">
                    <a href="#" data-ng-click="showDashboard('claimed-buylead-list');">
                        <i class="material-icons fasicon"></i>
                        <br>
                        Claimed Leads
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="placeQuotationModalSubmit" class="ng-scope">
<div class="modal fade ng-scope" id="placeQuotationModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div style="margin-top:2%;">
            <div class="offer-container">
                <div class="inner-offer">
                    <!--<a data-dismiss="modal" class="plncl"><i class="fa fa-times" aria-hidden="true"></i></a>-->
                    <div class="row">
                        <div class="bdinn">
                            <div class="bdetail">
                                <h3 class="ng-binding"></h3>
                                <p class="ng-binding"><span>Quantity:</span> </p>
                                <p class="ng-binding"><span>Price:</span> </p>

                                <div class="clr"></div>
                                <strong>Message:</strong>
                                <main ng-bind-html="buylead_detail.message" class="ng-binding"></main>
                                <div class="clr"></div>


                                <img src="#" class="bdetimg1 ng-scope" alt="" title="" data-ng-if="buylead_detail.image != ''"><!-- end ngIf: buylead_detail.image != '' -->
                                <div class="clr"></div>
                                <h2 class="top-spc4">Buyer Detail</h2>
                                <div class="clr"></div>
                                <i class="fa fa-building-o" aria-hidden="true"></i>
                                <h5 class="ng-binding"></h5>
                                <div class="clr"></div>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <h5 class="ng-binding"></h5>
                                <div class="clr"></div>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <h5 class="ng-binding"></h5>
                                <div class="clr"></div>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h5 class="ng-binding"></h5>
                                <div class="bdetimg">
                                    <img src="images/country_flags/India.png" alt="India" title="India">
                                    <p class="ng-binding"></p>
                                </div>
                                <div class="clr"></div>
                                <div class="bdquote top-spc6">You have <span class="ng-binding"></span> quotes remaining this week
                                    <a href="#"><i class="material-icons bdquoteinf" data-toggle="tooltip" data-placement="top" title="" data-original-title="Coming Soon">info</i></a></div>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="bdinn">
                            <div class="mquot">
                                <h2>Submit Quotation</h2>
                                <div class="col-sm-12">
                                    <label>Price Range</label>
                                    <input data-ng-model="buylead_detail.quotation_price_range" type="text" class="fcfield ng-pristine ng-untouched ng-valid ng-empty">
                                </div>
                                <div class="col-sm-12 top-spc">
                                    <label>Taxes</label>
                                    <span class="fa faicon">%</span>
                                    <input data-ng-model="buylead_detail.quotation_tax2" type="text" class="fcfield ng-pristine ng-untouched ng-valid ng-empty">
                                </div>
                                <div class="col-sm-12 top-spc">
                                    <label>Delivery Period</label>
                                    <input data-ng-model="buylead_detail.quotation_delivery_detail" type="text" class="fcfield ng-pristine ng-untouched ng-valid ng-empty">
                                </div>
                                <div class="col-sm-12 top-spc">
                                    <label>Payment Terms</label>
                                    <input data-ng-model="buylead_detail.quotation_payment_term" type="text" class="fcfield ng-pristine ng-untouched ng-valid ng-empty">
                                </div>
                                <div class="col-sm-12 top-spc">
                                    <label>Description</label>
                                    <textarea data-ng-model="buylead_detail.quotation_description" class="fctextarea ng-pristine ng-untouched ng-valid ng-empty"></textarea>
                                </div>
                                <div class="col-sm-12 top-spc">
                                    <input type="file" id="attachment" data-ng-model="attachment" onchange="angular.element(this).scope().attachmentChanged(this)" style="display:none;" class="ng-pristine ng-untouched ng-valid ng-empty">
                                    <button class="mquotbtn" data-ng-click="openAttachment();">
                                        <i class="fa fa-paperclip" aria-hidden="true"></i> Attach File
                                    </button>
                                    <span>(Doc, Pdf, Xls, Image etc)</span>
                                </div>
                                <div class="col-sm-12 top-spc2">
                                    <button type="button" class="requir-btn" data-ng-click="submitQuotation();">
                                        <span class="requir-btnsp1">Send Quotation To Buyer</span>
                                        <span class="requir-btnsp2">(Email, SMS &amp; App Notification)</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade ng-scope" id="buyServiceModal" tabindex="-1" role="dialog">
    <div class="modal-dialog byen-o" role="document">
        <div>
            <div class="byen-cont congo">
                <div>
                    <div class="doneb">
                        <!-- ngIf: message_left_header != '' -->
                        <!-- ngIf: message_left_header == '' --><div data-ng-if="message_left_header == ''" class="ng-scope">
                            <div class="donebin2 top-spc">
                                Buylead Subscriptions For You
                            </div>
                        </div><!-- end ngIf: message_left_header == '' -->
                    </div>
                    <div class="clr"></div>
                    <div class="plnbx top-spc">
                        <!-- ngRepeat: subscription in subscription_list -->
                        <div class="pln">
                            <div class="plnhin">
                                <div class="plnh6 bot-spc">Become a Gold Supplier on Metalbaba </div>
                            </div>
                            <div class="plncrclimg">
                                <img src="images/gold-shield1.png">
                            </div>
                            <div class="plnh4 top-spc2 bot-spc">
                                240 Leads
                                Gold Supplier Badge
                                Online Catalogue
                                Priority in Ranking
                                VIP Customer Services
                            </div>
                            <div class="pln-btn2"><a href="/gold-membership#subscriptions" target="_blank">Buy Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade ng-scope" id="placeQuotationConfirmModal" tabindex="-1" role="dialog">
    <div class="modal-dialog cnmdl congo" role="document" style="margin-top:10%;">
        <div class="doneb1">
            <div class="donebh2 top-spc">
            Continue Filling Quotation ?
            </div>
        </div>
        <div class="cnmd2">
            <div class="cnmdltxt1">
            It is highly recommended that Quotation is filled for a Quick Response from buyer.
        </div>
            <div class="btnsec top-spc3">
            <div class="btnsec top-spc5">
                <button type="button" class="btny bttn-material-flat bttn-md" onclick="placeQuotationContinue();">Yes</button>
                <button type="button" class="btnn bttn-material-flat bttn-md" onclick="placeQuotationCancel();">No</button>
            </div>
        </div>
        </div>
    </div>
</div>

<script src="js/PositionSticky.js" class="ng-scope"></script>
<script src="js/jQuery.positionSticky.js" class="ng-scope"></script>
<script class="ng-scope">jQuery('.sticky').positionSticky({offsetTop: 80});</script>
<script src="js/jquery.nice-select.min.js" class="ng-scope"></script>
<script src="js/fastclick.js" class="ng-scope"></script>
<script src="js/prism.js" class="ng-scope"></script>
<script class="ng-scope">
    var placeQuotationContinue = function(){
        $('#placeQuotationModalSubmit').val(0);
        $('#placeQuotationConfirmModal').modal('toggle');
    };

    var placeQuotationCancel = function(){
        $('#placeQuotationModalSubmit').val(1);
        $('#placeQuotationModal').modal('toggle');
        $('#placeQuotationConfirmModal').modal('toggle');
    };

    $('#placeQuotationModal').on('hide.bs.modal', function (e) {
        if ($('#placeQuotationModalSubmit').val() == 1) {
            return true;
        } else {
            if ($("#placeQuotationConfirmModal").hasClass("in") !== true) {
                $('#placeQuotationConfirmModal').modal('toggle');
            }
            return false;
        }
    });
</script>

<script class="ng-scope">
    $(document).ready(function () {
        $(document).on('show.bs.modal', '.modal', function (event) {
            var zIndex = 1040 + (10 * $('.modal:visible').length);
            $(this).css('z-index', zIndex);
            setTimeout(function() {
                $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
            }, 0);
        });

        $(document).on('hidden.bs.modal', function () {
        $(document.body).css('padding-right', 0);
    });
});
</script></div>


    </div>
  </div>
</div>
