<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Master Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('sales/entity')}}">รหัสลูกค้า (Entity)</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('sales/docmast')}}">รหัสเอกสาร</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('sales/whmast')}}">รหัสคลังสินค้า</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('sales/commission')}}">กำหนดข้อมูล Commission</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('sales/incentive')}}">กำหนดข้อมูล Incentive</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Promotion Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!--<li>
                                    <a href="{{URL::to('sales/promotion')}}">Promotion</a>
                                </li>-->
                                <li>
                                    <a href="{{URL::to('sales/pmtmast')}}">Promotion</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('sales/promotioncust')}}">Consignee</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('sales/promotionprod')}}">Product</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('sales/promotiondisc')}}">Discount</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 

                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Customer<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('sales/addcustomer')}}">ข้อมูลลูกค้า</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Transaction<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('sales/addsales')}}">บันทึกขายสินค้า</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('sales/addremand')}}">ส่งคืนสินค้า</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('sales/addcustorder')}}">สั่งสินค้า</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Commission<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('sales/pc')}}">บันทึกข้อมูลพนักงาน</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('sales/addpctime')}}">บันทึกเวลาทำงาน</a>
                                </li>
                                <!--<li>
                                    <a href="#">.. <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul> -->
                                    <!-- /.nav-third-level -->
                                <!--</li> --> 
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Report<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">รายงานการขาย</a>
                                </li>
                                <li>
                                    <a href="#">รายงานสินค้า</a>
                                </li>


                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Stock Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Stock Balance</a>
                                </li>
                                <li>
                                    <a href="#">Stock Movement</a>
                                </li>


                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
</div>