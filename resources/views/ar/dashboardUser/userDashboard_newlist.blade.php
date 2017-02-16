@extends('ar.dashboardUser.dash_master_layout')
{{--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">--}}
{{--<link rel="stylesheet" href="{{ asset('/css/form-css/bootstrap.min.css') }}">--}}
{{--<link rel="stylesheet" href="{{ asset('/css/form-css/font-awesome.min.css') }}">--}}
<link rel="stylesheet" href="{{ asset('/css/form-css/form-elements.css') }}">
<link rel="stylesheet" href="{{ asset('/css/form-css/style.css') }}">
@section('content')
  <style>
    #mapCanvas {
      width: 100%;
      height: 220px;
      float: left;
    }
    
    #infoPanel {
      float: left;
      margin-left: 10px;
    }
    
    #infoPanel div {
      margin-bottom: 5px;
    }
  </style>
  
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul class="list-group">
          @foreach ($errors->all() as $error)
            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ url('user/addlist') }}" method="POST" role="form" class="formstylign f1" enctype="multipart/form-data" id="newvalentery">
      <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
        {{ csrf_field() }}
        <h3>أضف قائمة جديدة</h3>
        <p>ملء الاستمارة للحصول على إمكانية الوصول الفوري</p>
        <div class="f1-steps">
          <div class="f1-progress">
            <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
          </div>
          <div class="f1-step active">
            <div class="f1-step-icon"><i class="fa fa-user"></i></div>
            <p>اضف الموقع</p>
          </div>
          <div class="f1-step">
            <div class="f1-step-icon">
              <i class="fa fa-key"></i>
            </div>
            <p>تفاصيل</p>
          </div>
          <div class="f1-step">
            <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
            <p>نشر</p>
          </div>
        </div>
        
        <fieldset>
          
          <div class="listingdetailswrp fulwidthm left mgnTB30">
            <div class="indexwrpaer">
              <div class=" fulwidthm left pdg20 graybg">
                <div class="col-sm-12 col-xs-12 nopadding">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10">عنوان
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> يرجى اختيار تسمية من القائمة التي على وشك إضافة من هنا.</div>
                      </div>
                    </label>
                    <input id="" type="text" class="fulwidthm commoninput commoninputborder pdgS05" placeholder="عنوان" autocomplete="off" name="title" required/>
                  </div>
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10">ملصق
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> يرجى اختيار تسمية من القائمة التي على وشك إضافة من هنا.</div>
                      </div>
                    </label>
                    <select id="" class="listingselect text-left" style="width: 100%" name="type" required>
                      <option value="rent">عقار للإيجار</option>
                      <option value="sale">عقار للبيع</option>
                    </select>
                  </div>
                  
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10"><i class="fa fa-map-marker"></i>&nbsp;المدينة / المنطقة</label>
                    <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                      <div class="helpanswer"> الرجاء اختيار المدينة التي يقع الممتلكات الخاصة بك. تأكد من اختيار من القائمة، بدلا من كتابة في مكانك. أيضا التأكد من أن تعطي مدينة الصحيحة لتحقيق أفضل النتائج.
                      </div>
                    </div>
                    <input id="listcity" type="text" class="fulwidthm commoninput commoninputborder pdgS05" placeholder="المدينة / المنطقة" autocomplete="off" name="region"/></div>
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10"><i class="fa fa-map-marker"></i>&nbsp;منزل / العنوان</label>
                    <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                      <div class="helpanswer"> يمكنك ان تعطي اسم بيت أو رقم المنزل، رقم الشارع وغيرها من أجل تحديد موقع الممتلكات الخاصة بك.</div>
                    </div>
                    <input id="address" type="text" class="fulwidthm commoninput commoninputborder pdgS05" placeholder="المنزل اسم / شقة / رقم الشارع" name="street" value=""/>
                    <input id="latitude" name="latitude" type="hidden" value="" required/>
                    <input id="longitude" name="longitude" type="hidden" value="" required/>
                  </div>
                  <div id="mapCanvas"></div>
                  <div id="infoPanel">
                    <b>وضع علامة:</b>
                    <div id="markerStatus"><i>انقر واسحب علامة.</i></div>  
                  </div>
                  {{--<div class="listingrow fulwidthm mgnB30 left">--}}
                  {{--<label class="robotomedium font-size14 graytext mgnB10">Pincode</label>--}}
                  {{--<div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>--}}
                  {{--<div class="helpanswer"> Please choose the pincode in which your space is located.</div>--}}
                  {{--</div>--}}
                  {{--<input id="pincode" type="text" class="fulwidthm commoninput commoninputborder pdgS05" name="pincode"/>--}}
                  {{--</div>--}}
                </div>
                <div class="col-xs-3 hidden-xs nopaddingR"></div>
              </div>
            </div>
          </div>
          <div class="f1-buttons">
            <button type="button" class="btn btn-next">التالى</button>
          </div>
        </fieldset>
        
        <fieldset>
          
          <div class="indexwrpaer">
            <div class="outrtlistf">
              <div id="divnotshownn" class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> قائمة تفاصيل
                  <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                    <div class="helpanswer"> تحديد تفاصيل الممتلكات لديك.</div>
                  </div>
                </div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="listingcol col-sm-4 nopaddingLR">
                      <label class="robotomedium font-size14 graytext">السعر ($)
                        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                          <div class="helpanswer"> يرجى ملاحظة أن قائمة الأسعار التي قمت بإدخالها سيتم تقريب عند عرضها.</div>
                        </div>
                      </label>
                      <input type="number" id="listprice" name="price" class="commoninput fulwidthm commoninputborder pdg05" placeholder="سعر البيع / الإيجار الشهري" value="" required>
                    </div>
                    <div class="listingcol col-sm-4 ">
                      <label class="robotomedium font-size14 graytext mgnB10">حالة توافر</label>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> ذكر مركز الرؤية الممتلكات الخاصة بك بين وكلاء. إذا قمت بتحديد متاح لجميع عملاء ثم قسط لدينا يمكن البحث والوصول إليك مع طلبات المساعدة في بيع أو تأجير الممتلكات الخاصة بك. كيف من أي وقت مضى إذا قمت بتحديد كما فقط لعملاء تعيينه بعد ذلك فقط وكلاء لك تخصيص سوف تكون قادرة على الاتصال بك.
                        </div>
                      </div>
                      <select id="availabilty" name="availabilty" class="listingselect text-left">
                        <option value="1" selected="">متاح للجميع</option>
                        <option value="2">المتاحة وكلاء فقط لتعيين</option>
                      </select>
                    </div>
                    <div class="listingcol col-sm-4 nopaddingLR">
                      <label class="robotomedium font-size14 graytext mgnB10">نوع المنزل</label>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> اختر نوع الرئيسية</div>
                      </div>
                      <select id="hometype" name="hometype" class="listingselect text-left" required>
                        <option value="Single Family">عائلة واحدة</option>
                        <option value="Multi Family">عدة عائلات</option>
                        <option value="Apartment">شقة</option>
                        <option value="Vacant Land">أرض خالية</option>
                        <option value="Pocket Listings">القوائم جيب</option>
                        <option value="Farm">مزرعة</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <label class="robotomedium font-size14 graytext mgnB10">حول هذا العقار</label>
                    <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                      <div class="helpanswer"> إعطاء الوصف القصير للملكية الخاصة بك.</div>
                      <span align="right" id="xcountd">250</span> الأحرف المتبقية
                    </div>
                    <textarea id="aboutlist" name="info" class="commoninput  whitebg fulwidthm commoninputborder pdg05" style="height:80px;" placeholder="تقول للآخرين ما تحب عن هذا العقار. يبقيه بسيط، ولكن أن تسليط الضوء على القائمة الخاصة بك."></textarea>
                  </div>
                </div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="listingcol col-sm-4 nopaddingLR">
                      <label class="robotomedium font-size14 graytext mgnB10">نموذج معماري </label>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> اختيار العمارة نموذج</div>
                      </div>
                      <select id="architecturemdls" name="architecturalmodel" class="listingselect text-left">
                        <option value="Colonial">استعماري</option>
                        <option value="Contemporary">معاصر</option>
                        <option value="Modern">حديث</option>
                        <option value="Medieval">من القرون الوسطى</option>
                      </select>
                    </div>
                    <div class="listingcol col-sm-4 ">
                      <label class="robotomedium font-size14 graytext mgnB10">بنيت عام</label>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> تدخل سنة التي بنيت على الممتلكات</div>
                      </div>
                      <select id="yearbuilt" name="yearbuilt" class="listingselect">
                        <?php
                        $year1 = 20;
                        $year2 = intval(date('y'));
                        $year1 .= $year2;
                        for($i = 1850; $i <= $year1; $i++){
                        ?>
                        <option value="<?=$i.'-01-01'?>"><?=$i.'-01-01'?></option>
                        <?php }?>
                      </select>
                    </div>
                    <div class=" listingcol col-sm-4">
                      <label class="robotomedium font-size14 graytext mgnB10">تعديل على</label>
                      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                        <div class="helpanswer"> تدخل سنة التي الممتلكات آخر تعديل ل</div>
                      </div>
                      <select id="modifiedon" name="yearmodified" class="listingselect">
                        <?php
                        $year1 = 20;
                        $year2 = intval(date('y'));
                        $year1 .= $year2;
                        for($i = 1850; $i <= $year1; $i++){
                        ?>
                        <option value="<?=$i.'-01-01'?>"><?=$i.'-01-01'?></option>
                        <?php }?>
                      </select>
                    </div>
                    <div class=" pdg20" style="padding: 20px 0px !important;">
                      <div class="listingrow fulwidthm mgnB30 left">
                        <div class="listingcol col-sm-4 nopaddingLR">
                          <label class="robotomedium font-size14 graytext mgnB10">نوع الكثير</label>
                          <div class="helpqust mgnT05 graytext">
                            <i class="fa fa-question-circle"></i>
                            <div class="helpanswer"> حدد لوط نوع حجم الممتلكات الخاصة بك.</div>
                          </div>
                          <select id="lottype" name="lottype" class="listingselect text-left">
                            <option value="0" selected="">فدان</option>
                            <option value="1">قدم مربع</option>
                          </select>
                        </div>
                        <div class="listingcol col-sm-4 ">
                          <label class="robotomedium font-size14 graytext mgnB10">حجم كبير</label>
                          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                            <div class="helpanswer"> أدخل حجم الكثير من الممتلكات الخاصة بك.</div>
                          </div>
                          <input type="number" id="lotsize" name="lotsize" class="commoninput fulwidthm commoninputborder pdg05" value="" placeholder="حجم كبير" required>
                        </div>
                        <div class="listingcol col-sm-4 nopaddingLR">
                          <label class="robotomedium font-size14 graytext mgnB10">الرئيسية الحجم (قدم مربع)</label>
                          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                            <div class="helpanswer"> (حدد حجم الرئيسية من الممتلكات الخاصة بك (في قدم مربع).</div>
                          </div>
                          <input type="number" id="homesize" name="homesize" class="commoninput fulwidthm commoninputborder pdg05" value="" placeholder="الرئيسية الحجم (قدم مربع)" required>
                        </div>
                      </div>
                    </div>
                    <div class="pdg20" style="padding: 20px 0px !important;">
                      <div class="listingrow fulwidthm mgnB30 left">
                        <div class="listingcol col-sm-4 nopaddingLR">
                          <label class="robotomedium font-size14 graytext mgnB10">قصص</label>
                          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                            <div class="helpanswer"> عدد من القصص في المنزل.</div>
                          </div>
                          <select id="stories" name="stories" class="listingselect text-left">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10+</option>
                          </select>
                        </div>
                        <div class="listingcol col-sm-4 ">
                          <label class="robotomedium font-size14 graytext mgnB10">حبس الرهن</label>
                          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                            <div class="helpanswer"> اختيار ما إذا الممتلكات الخاصة بك هو الرهن أم لا.</div>
                          </div>
                          <select id="forclosure" name="forclosure" class="listingselect text-left">
                            <option value="2" selected="">لا</option>
                            <option value="1">نعم فعلا</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="pdg20" style="padding: 20px 0px !important;">
                      <div class="listingrow fulwidthm mgnB30 left">
                        <label class="robotomedium font-size14 graytext mgnB10">تفاصيل اضافية</label>
                        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                          <div class="helpanswer"> يذكر أي تفاصيل إضافية أخرى حول الممتلكات الخاصة بك</div>
                          <span align="right" id="xcount">250</span> الأحرف المتبقية
                        </div>
                        <textarea
                          id="otherrentdetail" name="otherrentdetail" class="commoninput  whitebg fulwidthm commoninputborder pdg05" style="height:80px;" placeholder="يذكر أي تفاصيل إضافية عن العقار" required
                          maxlength="250"></textarea>
                      </div>
                    </div>
                    <div class="pdg20" style="padding: 20px 0px !important;">
                      <div class="listingrow fulwidthm mgnB30 left">
                        <label class="robotomedium font-size14 graytext mgnB10">فيديو رابط</label>
                        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                          <div class="helpanswer"> هنا يمكنك ان تعطي الارتباط إلى الفيديو الذي يعرض الممتلكات الخاصة بك</div>
                        </div>
                        <input id="videolink" type="url" name="videolink" class="commoninput  whitebg fulwidthm commoninputborder pdg05" value="" placeholder="فيديو رابط">
                      </div>
                    </div>
                    <div class="pdg20" style="padding: 20px 0px !important;">
                      <div class="listingrow fulwidthm mgnB30 left">
                        <div class="listingcol col-sm-4 nopaddingLR">
                          <label class="robotomedium font-size14 graytext mgnB10">سرير</label>
                          <select id="beds" name="beds" class="listingselect ">
                            <option value="1" selected>1 سرير</option>
                            <option value="2">2 سرير</option>
                            <option value="3">3 سرير</option>
                            <option value="4">4 سرير</option>
                            <option value="5">5 سرير</option>
                            <option value="6">6 سرير</option>
                            <option value="7">7 سرير</option>
                            <option value="8">8 سرير</option>
                            <option value="9">9 سرير</option>
                            <option value="10">10+ سرير</option>
                          </select>
                        </div>
                        <div class="listingcol col-sm-4 " style="">
                          <label class="robotomedium font-size14 graytext mgnB10">الحمامات</label>
                          <select id="bathrooms" name="bathrooms" class="listingselect ">
                            <option value="0" selected="">0 الحمامات</option>
                            <option value="1">1 حمام</option>
                            <option value="2">2 حمام</option>
                            <option value="3">3 حمام</option>
                            <option value="4">4 حمام</option>
                            <option value="5">5 حمام</option>
                            <option value="6">6 حمام</option>
                            <option value="7">7 حمام</option>
                            <option value="8">8 حمام</option>
                            <option value="9">9 حمام</option>
                            <option value="10">10+ حمام</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pdg20" style="padding: 20px 0px !important;">
                    <div class="listingrow fulwidthm mgnB30 left">
                      <div class="listingcol col-sm-4 nopaddingLR">
                        <label class="robotomedium font-size14 graytext mgnB10">1 الفتح تاريخ</label>
                        <input type="date" id="opendate" name="opendate" class="datepicker commoninput fulwidthm commoninputborder pdg05" value="" placeholder="تاريخ">
                      </div>
                      <div class="listingcol col-sm-4 ">
                        <label class="robotomedium font-size14 graytext mgnB10">وقت البدء</label>
                        <input class="listingselect" type="time" name="starttime" id="" value="" placeholder=""/>
                      </div>
                      <div class="listingcol col-sm-4 nopaddingLR">
                        <label class="robotomedium font-size14 graytext mgnB10">وقت النهاية</label>
                        <input class="" type="time" name="endtime" id="" value="" placeholder=""/>
                      </div>
                    </div>
                  </div>
                </div>
              
              
              </div>
              
              
              <div class="f1-buttons">
                <button type="button" class="btn btn-previous">سابق</button>
                <button type="button" class="btn btn-next">التالى</button>
              </div>
        
        </fieldset>
        
        <fieldset>
          <div class="indexwrpaer">
            <div class="outrtlistf">
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> غرف متوفره</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green" style="position: relative;">
                          <input type="checkbox" name="office" id="office" value="1" class="flat listcheckin">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">مكتب</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="dinning" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">الطعام</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="family" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">أسرة</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="living" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">المعيشة</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="guest" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">ضيف</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="kitchen" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">مطبخ</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> وسائل الراحة في الأماكن المغلقة</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="cabelTv" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">الكيبل التلفزيوني</span>
                      </div>
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="fans" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">المشجعين </span>
                      </div>
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="internet" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">الإنترنت </span>
                      </div>
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="securitysys" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">نظام الأمن </span>
                      </div>
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="wifi" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">واي فاي</span>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> وسائل الراحة في الهواء الطلق</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="balcony" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">شرفة</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="pool" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">حوض السباحة</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="lawn" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">العشب</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="garden" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">حديقة</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="fence" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">سياج</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="gym" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">نادي رياضي</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> نوع الكلمة</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      
                      <div class="eachaminiti" style="width: 100%;">
                        <div class="icheckbox_flat-green" style="width: 60%;">
                          <select class="form-control" name="floortye">
                            <option selected="selected">اختر نوع الدور</option>
                            <option value="tile">قرميدة</option>
                            <option value="carpet">سجادة</option>
                            <option value="hardwood">الصلبة</option>
                            <option value="concrete">الخرسانة</option>
                            <option value="granite">صوان</option>
                            <option value="marbel">رخام</option>
                          </select>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Utilities Available</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="aircondition" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">مكيف هواء</span>
                      </div>
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="heater" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">سخان</span>
                      </div>
                      
                      <div class="eachaminiti">
                        <div class="icheckbox_flat-green">
                          <input type="checkbox" name="naturalAir" id="" value="1" class="">
                        </div>
                        <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">الهواء الطبيعي</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> توفر موقف سيارات</div>
                <div class="pdg20">
                  <div class="listingrow fulwidthm mgnB30 left">
                    <div class="aminiticol col-sm-12 nopaddingLR">
                      
                      <div class="eachaminiti" style="width: 100%;">
                        <div class="icheckbox_flat-green" style="width: 60%;">
                          <select class="form-control" name="garagetype">
                            <option selected="selected">حدد نوع وقوف السيارات</option>
                            <option value="">المرآب المرفقة</option>
                            <option value="">كراج مستقل</option>
                            <option value="">في شارع وقوف السيارات</option>
                            <option value="">قبالة شارع وقوف السيارات</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="listerow fulwidthm left  whitebg mgnB20">
                  <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> بناء مشاهدة</div>
                  <div class="pdg20">
                    <div class="listingrow fulwidthm mgnB30 left">
                      <div class="aminiticol col-sm-12 nopaddingLR">
                        
                        <div class="eachaminiti" style="width: 100%;">
                          <div class="icheckbox_flat-green" style="width: 60%;">
                            <select class="form-control" name="buildingview">
                              <option selected="selected">حدد طريقة عرض بناء</option>
                              <option value="City View">اطلالة المدينة</option>
                              <option value="Mountain View">ماونتن فيو</option>
                              <option value="Water View">الماء مشاهدة</option>
                              <option value="Park View">بارك فيو</option>
                              <option value="Building View">بناء مشاهدة</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
          <div class="indexwrpaer">
            <div class="outrtlistf">
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="pdg20">
                  <input class="form-control" type="file" name="img" placeholder="Upload Files" accept="image/*" multiple/>
                </div>
              </div>
            </div>
          </div>
          <div class="indexwrpaer">
            <div class="outrtlistf">
              <div class="listerow fulwidthm left  whitebg mgnB20">
                <div class="pdg20">
                
                </div>
              </div>
            </div>
          </div>
          <div class="f1-buttons">
            <button type="button" class="btn btn-previous">سابق</button>
            <input class="btn btn-sucess btn-lg" type="Submit" name="submit" id="" value="Submit" style="max-width: 204px;background-color: rgba(139, 195, 74, 0.85);    border: 2px solid rgba(55, 93, 51, 0.3);"/>
          </div>
  </div>
  </div>
  </fieldset>
  
  
  </section>
  </form>
  
  <!--   <form action="{{ url('user/addlist') }}" method="POST" role="form" class="formstylign" enctype="multipart/form-data" id="newvalentery">
      <section class="detailsection mgnB20 fulwidthm whitebg left pdg15">
        {{ csrf_field() }}
    <div class="listingdetailswrp fulwidthm left mgnTB30">
      <div class="indexwrpaer">
        <div class=" fulwidthm left pdg20 graybg">
          <div class="col-sm-12 col-xs-12 nopadding">
            <div class="listingrow fulwidthm mgnB30 left">
              <label class="robotomedium font-size14 graytext mgnB10">Title
                <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                  <div class="helpanswer"> Please Choose a label of the listing you are about to add from here.</div>
                </div>
              </label>
              <input id="" type="text" class="fulwidthm commoninput commoninputborder pdgS05" placeholder="Title" autocomplete="off" name="title" required/>
            </div>
            <div class="listingrow fulwidthm mgnB30 left">
              <label class="robotomedium font-size14 graytext mgnB10">Label
                <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                  <div class="helpanswer"> Please Choose a label of the listing you are about to add from here.</div>
                </div>
              </label>
              <select id="" class="listingselect text-left" style="width: 100%" name="type" required>
                <option value="rent">Property For Rent</option>
                <option value="sale">Property For Sale</option>
              </select>
            </div>
            
            <div class="listingrow fulwidthm mgnB30 left">
              <label class="robotomedium font-size14 graytext mgnB10"><i class="fa fa-map-marker"></i>&nbsp;City/Region</label>
                  <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                    <div class="helpanswer"> Please choose the city in which your property is located. Make sure you choose from the list, rather than typing in your place. Also make sure that
                      you give the correct city for the best results.
                    </div>
                  </div>
                  <input id="listcity" type="text" class="fulwidthm commoninput commoninputborder pdgS05" placeholder="City/Region" autocomplete="off" name="region"/></div>
                <div class="listingrow fulwidthm mgnB30 left">
                  <label class="robotomedium font-size14 graytext mgnB10"><i class="fa fa-map-marker"></i>&nbsp;House/Street Address</label>
                  <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
                    <div class="helpanswer"> You can give the house name or house number, street number etc to pin point your property location.</div>
                  </div>
                  <input id="pac-input" type="text" class="fulwidthm commoninput commoninputborder pdgS05" placeholder="House Name/Apartment Number/Street" name="street"/>
                  <input id="latitude" name="latitude" type="hidden" value="" required/>
                  <input id="longitude" name="longitude" type="hidden" value="" required/>
                </div>
                <div id="map_canvas" style=" width: 100%;height: 200px;"></div>
                {{--<div class="listingrow fulwidthm mgnB30 left">--}}
  {{--<label class="robotomedium font-size14 graytext mgnB10">Pincode</label>--}}
  {{--<div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>--}}
  {{--<div class="helpanswer"> Please choose the pincode in which your space is located.</div>--}}
  {{--</div>--}}
  {{--<input id="pincode" type="text" class="fulwidthm commoninput commoninputborder pdgS05" name="pincode"/>--}}
  {{--</div>--}}
    </div>
    <div class="col-xs-3 hidden-xs nopaddingR"></div>
  </div>
</div>
</div>
<div class="indexwrpaer">
<div class="outrtlistf">
  <div id="divnotshownn" class="listerow fulwidthm left  whitebg mgnB20">
    <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> List Details
      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
        <div class="helpanswer"> Specify the details of the property you have.</div>
      </div>
    </div>
    <div class="pdg20">
      <div class="listingrow fulwidthm mgnB30 left">
        <div class="listingcol col-sm-4 nopaddingLR">
          <label class="robotomedium font-size14 graytext mgnB10">Price ($)
            <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
              <div class="helpanswer"> Please note that the listing price you have entered will be rounded when displayed.</div>
            </div>
          </label>
          <input type="number" id="listprice" name="price" class="commoninput fulwidthm commoninputborder pdg05" placeholder="Selling Price / Monthly Rent" value="" required>
        </div>
        <div class="listingcol col-sm-4 ">
          <label class="robotomedium font-size14 graytext mgnB10">Availability Status</label>
          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
            <div class="helpanswer"> Mention the Visibility Status of your property among Agents. If you specify as Available to All then our premium agents can search and reach you
              with requests in helping selling or renting out your property. How ever if you specify as only for assigned agents then only agents you allocate
              will be able to contact you.
            </div>
          </div>
          <select id="availabilty" name="availabilty" class="listingselect text-left">
            <option value="1" selected="">Available to All</option>
            <option value="2">Available Only To Assigned Agents</option>
          </select>
        </div>
        <div class="listingcol col-sm-4 nopaddingLR">
          <label class="robotomedium font-size14 graytext mgnB10">Home Type</label>
          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
            <div class="helpanswer"> Choose the Home Type</div>
          </div>
          <select id="hometype" name="hometype" class="listingselect text-left" required>
            <option value="Single Family">Single Family</option>
            <option value="Multi Family">Multi Family</option>
            <option value="Apartment">Apartment</option>
            <option value="Vacant Land">Vacant Land</option>
            <option value="Pocket Listings">Pocket Listings</option>
            <option value="Farm">Farm</option>
          </select>
        </div>
      </div>
    </div>
    <div class="pdg20">
      <div class="listingrow fulwidthm mgnB30 left">
        <label class="robotomedium font-size14 graytext mgnB10">About This Property</label>
        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
          <div class="helpanswer"> Give a Short Description for your Property.</div>
          <span align="right" id="xcountd">250</span> Characters Remaining
        </div>
        <textarea id="aboutlist" name="info" class="commoninput  whitebg fulwidthm commoninputborder pdg05" style="height:80px;" placeholder="Tell others what you love about this property. Keep it simple, but let it highlight your listing."></textarea>
      </div>
    </div>
    <div class="pdg20">
      <div class="listingrow fulwidthm mgnB30 left">
        <div class="listingcol col-sm-4 nopaddingLR">
          <label class="robotomedium font-size14 graytext mgnB10">Architectural Model </label>
          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
            <div class="helpanswer"> Choose the Architecture Model</div>
          </div>
          <select id="architecturemdls" name="architecturalmodel" class="listingselect text-left">
            <option value="Colonial">Colonial</option>
            <option value="Contemporary">Contemporary</option>
            <option value="Modern">Modern</option>
            <option value="Medieval">Medieval</option>
          </select>
        </div>
        <div class="listingcol col-sm-4 ">
          <label class="robotomedium font-size14 graytext mgnB10">Year Built</label>
          <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
            <div class="helpanswer"> Enter the year on which the property has built</div>
          </div>
          <select id="yearbuilt" name="yearbuilt" class="listingselect">
            <?php
  $year1 = 20;
  $year2 = intval(date('y'));
  $year1 .= $year2;
  for($i = 1850; $i <= $year1 ; $i++){
  ?>
    <option value="<?= $i ?>"><?= $i ?></option>
                      <?php } ?>
    </select>
  </div>
  <div class=" listingcol col-sm-4">
    <label class="robotomedium font-size14 graytext mgnB10">Modification On</label>
    <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
      <div class="helpanswer"> Enter the year on which the property has last modified</div>
    </div>
    <select id="modifiedon" name="yearmodified" class="listingselect">
      <?php
  $year1 = 20;
  $year2 = intval(date('y'));
  $year1 .= $year2;
  for($i = 1850; $i <= $year1 ; $i++){
  ?>
    <option value="<?= $i ?>"><?= $i ?></option>
                      <?php } ?>
    </select>
  </div>
  <div class=" pdg20" style="padding: 20px 0px !important;">
    <div class="listingrow fulwidthm mgnB30 left">
      <div class="listingcol col-sm-4 nopaddingLR">
        <label class="robotomedium font-size14 graytext mgnB10">Lot Type</label>
        <div class="helpqust mgnT05 graytext">
          <i class="fa fa-question-circle"></i>
          <div class="helpanswer"> Select the Lot size type of your property.</div>
        </div>
        <select id="lottype" name="lottype" class="listingselect text-left">
          <option value="0" selected="">Acre</option>
          <option value="1">Sq.ft</option>
        </select>
      </div>
      <div class="listingcol col-sm-4 ">
        <label class="robotomedium font-size14 graytext mgnB10">Lot Size</label>
        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
          <div class="helpanswer"> Enter the Lot size of your property.</div>
        </div>
        <input type="number" id="lotsize" name="lotsize" class="commoninput fulwidthm commoninputborder pdg05" value="" placeholder="Lot Size" required>
      </div>
      <div class="listingcol col-sm-4 nopaddingLR">
        <label class="robotomedium font-size14 graytext mgnB10">Home Size (Sq.ft)</label>
        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
          <div class="helpanswer"> Select the Home size of your property (in Sq Feet).</div>
        </div>
        <input type="number" id="homesize" name="homesize" class="commoninput fulwidthm commoninputborder pdg05" value="" placeholder="Home Size" required>
      </div>
    </div>
  </div>
  <div class="pdg20" style="padding: 20px 0px !important;">
    <div class="listingrow fulwidthm mgnB30 left">
      <div class="listingcol col-sm-4 nopaddingLR">
        <label class="robotomedium font-size14 graytext mgnB10">Stories</label>
        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
          <div class="helpanswer"> Number of stories in house.</div>
        </div>
        <select id="stories" name="stories" class="listingselect text-left">
          <option value="1" selected>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10+</option>
        </select>
      </div>
      <div class="listingcol col-sm-4 ">
        <label class="robotomedium font-size14 graytext mgnB10">Foreclosure</label>
        <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
          <div class="helpanswer"> Choose whether your property is a foreclosure or not.</div>
        </div>
        <select id="forclosure" name="forclosure" class="listingselect text-left">
          <option value="2" selected="">No</option>
          <option value="1">Yes</option>
        </select>
      </div>
    </div>
  </div>
  <div class="pdg20" style="padding: 20px 0px !important;">
    <div class="listingrow fulwidthm mgnB30 left">
      <label class="robotomedium font-size14 graytext mgnB10">Additional Details</label>
      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
        <div class="helpanswer"> Mention any other additional details about your property.</div>
        <span align="right" id="xcount">250</span> Characters Remaining
      </div>
      <textarea
        id="otherrentdetail" name="otherrentdetail" class="commoninput  whitebg fulwidthm commoninputborder pdg05" style="height:80px;" placeholder="Mention Any Additional Details About the Property" required
        maxlength="250"></textarea>
    </div>
  </div>
  <div class="pdg20" style="padding: 20px 0px !important;">
    <div class="listingrow fulwidthm mgnB30 left">
      <label class="robotomedium font-size14 graytext mgnB10">Video Url</label>
      <div class="helpqust mgnT05 graytext"><i class="fa fa-question-circle"></i>
        <div class="helpanswer"> Here you can give the link to the video that showcases your property</div>
      </div>
      <input id="videolink" type="url" name="videolink" class="commoninput  whitebg fulwidthm commoninputborder pdg05" value="" placeholder="Video Url">
    </div>
  </div>
  <div class="pdg20" style="padding: 20px 0px !important;">
    <div class="listingrow fulwidthm mgnB30 left">
      <div class="listingcol col-sm-4 nopaddingLR">
        <label class="robotomedium font-size14 graytext mgnB10">Beds</label>
        <select id="beds" name="beds" class="listingselect ">
          <option value="1" selected>1 Bed</option>
          <option value="2">2 Beds</option>
          <option value="3">3 Beds</option>
          <option value="4">4 Beds</option>
          <option value="5">5 Beds</option>
          <option value="6">6 Beds</option>
          <option value="7">7 Beds</option>
          <option value="8">8 Beds</option>
          <option value="9">9 Beds</option>
          <option value="10">10+ Beds</option>
        </select>
      </div>
      <div class="listingcol col-sm-4 " style="">
        <label class="robotomedium font-size14 graytext mgnB10">Bathrooms</label>
        <select id="bathrooms" name="bathrooms" class="listingselect ">
          <option value="0" selected="">0 Bathroms</option>
          <option value="1">1 Bath</option>
          <option value="2">2 Bath</option>
          <option value="3">3 Bath</option>
          <option value="4">4 Bath</option>
          <option value="5">5 Bath</option>
          <option value="6">6 Bath</option>
          <option value="7">7 Bath</option>
          <option value="8">8 Bath</option>
          <option value="9">9 Bath</option>
          <option value="10">10+ Bath</option>
        </select>
      </div>
    </div>
  </div>
</div>
<div class="pdg20" style="padding: 20px 0px !important;">
  <div class="listingrow fulwidthm mgnB30 left">
    <div class="listingcol col-sm-4 nopaddingLR">
      <label class="robotomedium font-size14 graytext mgnB10">Open Date 1</label>
      <input type="date" id="opendate" name="opendate" class="datepicker commoninput fulwidthm commoninputborder pdg05" value="" placeholder="Date">
    </div>
    <div class="listingcol col-sm-4 ">
      <label class="robotomedium font-size14 graytext mgnB10">Start Time</label>
      <input class="listingselect" type="time" name="starttime" id="" value="" placeholder=""/>
    </div>
    <div class="listingcol col-sm-4 nopaddingLR">
      <label class="robotomedium font-size14 graytext mgnB10">End Time</label>
      <input class="" type="time" name="endtime" id="" value="" placeholder=""/>
    </div>
  </div>
</div>
</div>


</div>
<div class="indexwrpaer">
<div class="outrtlistf">
<div class="listerow fulwidthm left  whitebg mgnB20">
  <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Rooms Available</div>
  <div class="pdg20">
    <div class="listingrow fulwidthm mgnB30 left">
      <div class="aminiticol col-sm-12 nopaddingLR">
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green" style="position: relative;">
            <input type="checkbox" name="office" id="office" value="1" class="flat listcheckin">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Office</span>
        </div>
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="dinning" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Dining</span>
        </div>
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="family" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Family</span>
        </div>
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="living" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Living</span>
        </div>
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="guest" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Guest</span>
        </div>
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="kitchen" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">kitchen</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="listerow fulwidthm left  whitebg mgnB20">
  <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Indoor Amenities</div>
  <div class="pdg20">
    <div class="listingrow fulwidthm mgnB30 left">
      <div class="aminiticol col-sm-12 nopaddingLR">
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="cabelTv" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Cabel / TV</span>
        </div>
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="fans" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Fans </span>
        </div>
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="internet" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Internet </span>
        </div>
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="securitysys" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Security System </span>
        </div>
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="wifi" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">WiFi</span>
        </div>
      
      </div>
    </div>
  </div>
</div>
<div class="listerow fulwidthm left  whitebg mgnB20">
  <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Outdoor Amenities</div>
  <div class="pdg20">
    <div class="listingrow fulwidthm mgnB30 left">
      <div class="aminiticol col-sm-12 nopaddingLR">
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="balcony" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Balcony</span>
        </div>
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="pool" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Pool</span>
        </div>
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="lawn" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">lawn</span>
        </div>
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="garden" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Garden</span>
        </div>
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="fence" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Fence</span>
        </div>
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="gym" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">gym</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="listerow fulwidthm left  whitebg mgnB20">
  <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Floor Type</div>
  <div class="pdg20">
    <div class="listingrow fulwidthm mgnB30 left">
      <div class="aminiticol col-sm-12 nopaddingLR">
        
        
        <div class="eachaminiti" style="width: 100%;">
          <div class="icheckbox_flat-green" style="width: 60%;">
            <select class="form-control" name="floortye">
              <option selected="selected">Select a Floor type</option>
              <option value="tile">tile</option>
              <option value="carpet">carpet</option>
              <option value="hardwood">hardwood</option>
              <option value="concrete">concrete</option>
              <option value="granite">granite</option>
              <option value="marbel">marbel</option>
            </select>
          </div>
        </div>
      
      </div>
    </div>
  </div>
</div>
<div class="listerow fulwidthm left  whitebg mgnB20">
  <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Utilities Available</div>
  <div class="pdg20">
    <div class="listingrow fulwidthm mgnB30 left">
      <div class="aminiticol col-sm-12 nopaddingLR">
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="aircondition" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Air Conditioner</span>
        </div>
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="heater" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Heater</span>
        </div>
        
        <div class="eachaminiti">
          <div class="icheckbox_flat-green">
            <input type="checkbox" name="naturalAir" id="" value="1" class="">
          </div>
          <span class=" pdgS05 robotomedium font-size14 graytext  aminitname">Natural Air</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="listerow fulwidthm left  whitebg mgnB20">
  <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Parking Availablity</div>
  <div class="pdg20">
    <div class="listingrow fulwidthm mgnB30 left">
      <div class="aminiticol col-sm-12 nopaddingLR">
        
        <div class="eachaminiti" style="width: 100%;">
          <div class="icheckbox_flat-green" style="width: 60%;">
            <select class="form-control" name="garagetype">
              <option selected="selected">Select Parking type</option>
              <option value="">Garage Attached</option>
              <option value="">Garage Detached</option>
              <option value="">On Street Parking</option>
              <option value="">Off Street Parking</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="listerow fulwidthm left  whitebg mgnB20">
    <div class="listerowhead dblue_bg  text-left robotomedium fontsize18"> Building View</div>
    <div class="pdg20">
      <div class="listingrow fulwidthm mgnB30 left">
        <div class="aminiticol col-sm-12 nopaddingLR">
          
          <div class="eachaminiti" style="width: 100%;">
            <div class="icheckbox_flat-green" style="width: 60%;">
              <select class="form-control" name="buildingview">
                <option selected="selected">Select a Building view</option>
                <option value="City View">City View</option>
                <option value="Mountain View">Mountain View</option>
                <option value="Water View">Water View</option>
                <option value="Park View">Park View</option>
                <option value="Building View">Building View</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</div>
<div class="indexwrpaer">
<div class="outrtlistf">
<div class="listerow fulwidthm left  whitebg mgnB20">
  <div class="pdg20">
    <input class="form-control" type="file" name="img" placeholder="Upload Files" accept="image/*" multiple/>
  </div>
</div>
</div>
</div>
<div class="indexwrpaer">
<div class="outrtlistf">
<div class="listerow fulwidthm left  whitebg mgnB20">
  <div class="pdg20">
    <input class="btn btn-sucess btn-lg" type="Submit" name="submit" id="" value="Submit" style="max-width: 204px;background-color: rgba(139, 195, 74, 0.85);    border: 2px solid rgba(55, 93, 51, 0.3);"/>
  </div>
</div>
</div>
</div>
</div>
</div>
</section>
</form>-->
  </div>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">
    var geocoder = new google.maps.Geocoder();
    
    function geocodePosition(pos) {
      geocoder.geocode({
        latLng: pos
      }, function (responses) {
        if (responses && responses.length > 0) {
          updateMarkerAddress(responses[0].formatted_address);
        } else {
          updateMarkerAddress('Cannot determine address at this location.');
        }
      });
    }
    
    function updateMarkerStatus(str) {
      document.getElementById('markerStatus').innerHTML = str;
    }
    
    function updateMarkerPosition(latLng) {
    
      $('#latitude').attr('value',latLng.lat()); 
     $('#longitude').attr('value',latLng.lng());
    }
    
    function updateMarkerAddress(str) {
//      document.getElementById('address').innerHTML = str;
      $('#address').attr('value',str);
    }
    
    function initialize() {
      var latLng = new google.maps.LatLng(23.4241, 53.8478);
      var map = new google.maps.Map(document.getElementById('mapCanvas'), {
        zoom: 8,
        center: latLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var marker = new google.maps.Marker({
        position: latLng,
        title: 'Point A',
        map: map,
        draggable: true
      });
      
      // Update current position info.
      updateMarkerPosition(latLng);
      geocodePosition(latLng);
      
      // Add dragging event listeners.
      google.maps.event.addListener(marker, 'dragstart', function () {
        updateMarkerAddress('Dragging...');
      });
      
      google.maps.event.addListener(marker, 'drag', function () {
        updateMarkerStatus('Dragging...');
        updateMarkerPosition(marker.getPosition());
      });
      
      google.maps.event.addListener(marker, 'dragend', function () {
        updateMarkerStatus('Drag ended');
        geocodePosition(marker.getPosition());
      });
    }
    
    // Onload handler to fire off the app.
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <!--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa-O7jKdRNT_YuLql_7dDfJ6lgoCG0G2U&libraries=places&sensor=false&callback=initAutocomplete"></script>-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="~/js/jquery.geocomplete.min.js"></script>
  <script type="text/javascript">
    $('#newvalentery').on('keyup keypress', function (e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) {
//        e.preventDefault();
        return false;
      }
    });
  </script>
  <script src="{{ asset('/js/forms-js/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ asset('/js/forms-js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/js/forms-js/jquery.backstretch.min.js') }}"></script>
  <script src="{{ asset('/js/forms-js/retina-1.1.0.min.js') }}"></script>
  <script src="{{ asset('/js/forms-js/scripts.js') }}"></script>
@endsection
 
    
        
      
  