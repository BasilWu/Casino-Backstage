<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "include/in_head.php"?>
</head>

<body class="skin-2">
  <?php include "include/in_navbar.php"?>
  <div class="main-container ace-save-state" id="main-container">
    <?php include "include/in_sidebar.php"?>
    <div class="main-content">
      <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
          <ul class="breadcrumb">
            <li>
              <i class="ace-icon fa fa-home home-icon"></i>
              <a href="Char_index.php">首页</a>
            </li>
            <li>
              <a href="javascript:void(0)">银行数据修改</a>
            </li>
            <li>
              <a href="Member_bank.php">银行数据修改</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <form class="form-horizontal newoil-form" method="post"
                action="Member_bank.php">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">银行数据修改</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">会员帐号</label>
                            <div class="col-xs-12 col-sm-5">
                              <p class="form-control-static">kc666(meteor)</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">银行名称</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="bank_num" id="bank_num" data-placeholder="请选择"
                                required>
                                <option value="1">004臺灣銀行</option>
                                <option value="2">005土地銀行</option>
                                <option value="3">006合庫商銀</option>
                                <option value="4">007第一銀行</option>
                                <option value="5">008華南銀行</option>
                                <option value="6">009彰化銀行</option>
                                <option value="7" selected>011上海銀行</option>
                                <option value="8">012台北富邦</option>
                                <option value="9">013國泰世華</option>
                                <option value="10">016高雄銀行</option>
                                <option value="11">017兆豐商銀</option>
                                <option value="12">018農業金庫</option>
                                <option value="13">021花旗(台灣)銀行</option>
                                <option value="14">022美國銀行</option>
                                <option value="15">025首都銀行</option>
                                <option value="16">039澳盛(台灣)銀行</option>
                                <option value="17">048王道銀行</option>
                                <option value="18">050臺灣企銀</option>
                                <option value="19">052渣打商銀</option>
                                <option value="20">053台中銀行</option>
                                <option value="21">054京城商銀</option>
                                <option value="22">072德意志銀行</option>
                                <option value="23">075東亞銀行</option>
                                <option value="24">081匯豐(台灣)銀行</option>
                                <option value="25">082巴黎銀行</option>
                                <option value="26">101瑞興銀行</option>
                                <option value="27">102華泰銀行</option>
                                <option value="28">103臺灣新光商銀</option>
                                <option value="29">104台北五信</option>
                                <option value="30">108陽信銀行</option>
                                <option value="31">114基隆一信</option>
                                <option value="32">115基隆二信</option>
                                <option value="33">118板信銀行</option>
                                <option value="34">119淡水一信</option>
                                <option value="35">120淡水信合社</option>
                                <option value="36">124宜蘭信合社</option>
                                <option value="37">127桃園信合社</option>
                                <option value="38">130新竹一信</option>
                                <option value="39">132新竹三信</option>
                                <option value="40">146台中二信</option>
                                <option value="41">147三信銀行</option>
                                <option value="42">158彰化一信</option>
                                <option value="43">161彰化五信</option>
                                <option value="44">162彰化六信</option>
                                <option value="45">163彰化十信</option>
                                <option value="46">165鹿港信合社</option>
                                <option value="47">178嘉義三信</option>
                                <option value="48">188台南三信</option>
                                <option value="49">204高雄三信</option>
                                <option value="50">215花蓮一信</option>
                                <option value="51">216花蓮二信</option>
                                <option value="52">222澎湖一信</option>
                                <option value="53">223澎湖二信</option>
                                <option value="54">224金門信合社</option>
                                <option value="55">512雲林漁會</option>
                                <option value="56">515嘉義漁會</option>
                                <option value="57">517南市漁會</option>
                                <option value="58">518南縣漁會</option>
                                <option value="59">520小港漁會</option>
                                <option value="60">520高雄漁會</option>
                                <option value="61">521永安漁會</option>
                                <option value="62">521林園漁會</option>
                                <option value="63">521梓官漁會</option>
                                <option value="64">521興達港漁會</option>
                                <option value="65">521彌陀漁會</option>
                                <option value="66">523東港漁會</option>
                                <option value="67">523枋寮漁會</option>
                                <option value="68">523林邊漁會</option>
                                <option value="69">523琉球漁會</option>
                                <option value="70">524新港漁會</option>
                                <option value="71">525澎湖漁會</option>
                                <option value="72">526金門漁會</option>
                                <option value="73">600南龍漁會</option>
                                <option value="74">600通苑漁會</option>
                                <option value="75">600彰化漁會</option>
                                <option value="76">600七股農會</option>
                                <option value="77">600三義農會</option>
                                <option value="78">600下營農會</option>
                                <option value="79">600大內農會</option>
                                <option value="80">600大肚農會</option>
                                <option value="81">600中寮農會</option>
                                <option value="82">600仁愛農會</option>
                                <option value="83">600仁德農會</option>
                                <option value="84">600北斗農會</option>
                                <option value="85">600田尾農會</option>
                                <option value="86">600安定農會</option>
                                <option value="87">600西湖農會</option>
                                <option value="88">600伸港農會</option>
                                <option value="89">600官田農會</option>
                                <option value="90">600林內農會</option>
                                <option value="91">600南化農會</option>
                                <option value="92">600南庄農會</option>
                                <option value="93">600梧棲農會</option>
                                <option value="94">600鹿谷農會</option>
                                <option value="95">600麻豆農會</option>
                                <option value="96">600新市農會</option>
                                <option value="97">600溪州農會</option>
                                <option value="98">600彰化農會</option>
                                <option value="99">600福興農會</option>
                                <option value="100">600線西農會</option>
                                <option value="101">605高雄農會</option>
                                <option value="102">612神岡農會</option>
                                <option value="103">612豐原農會</option>
                                <option value="104">613名間農會</option>
                                <option value="105">613集集農會</option>
                                <option value="106">614二林農會</option>
                                <option value="107">614永靖農會</option>
                                <option value="108">614竹塘農會</option>
                                <option value="109">614秀水農會</option>
                                <option value="110">614芬園農會</option>
                                <option value="111">614芳苑農會</option>
                                <option value="112">614員林農會</option>
                                <option value="113">614埔心農會</option>
                                <option value="114">614埤頭農會</option>
                                <option value="115">616二崙農會</option>
                                <option value="116">616口湖農會</option>
                                <option value="117">616大埤農會</option>
                                <option value="118">616斗六農會</option>
                                <option value="119">616斗南農會</option>
                                <option value="120">616古坑農會</option>
                                <option value="121">616台西農會</option>
                                <option value="122">616四湖農會</option>
                                <option value="123">616西螺農會</option>
                                <option value="124">616虎尾農會</option>
                                <option value="125">616崙背農會</option>
                                <option value="126">616莿桐農會</option>
                                <option value="127">616褒忠農會</option>
                                <option value="128">617大林農會</option>
                                <option value="129">617六腳農會</option>
                                <option value="130">617太保農會</option>
                                <option value="131">617水上農會</option>
                                <option value="132">617布袋農會</option>
                                <option value="133">617民雄農會</option>
                                <option value="134">617朴子農會</option>
                                <option value="135">617竹崎農會</option>
                                <option value="136">617東石農會</option>
                                <option value="137">617梅山農會</option>
                                <option value="138">617鹿草農會</option>
                                <option value="139">617番路農會</option>
                                <option value="140">617新港農會</option>
                                <option value="141">617溪口農會</option>
                                <option value="142">617義竹農會</option>
                                <option value="143">617嘉義農會</option>
                                <option value="144">618六甲農會</option>
                                <option value="145">618北門農會</option>
                                <option value="146">618永康農會</option>
                                <option value="147">618玉井農會</option>
                                <option value="148">618西港農會</option>
                                <option value="149">618佳里農會</option>
                                <option value="150">618將軍農會</option>
                                <option value="151">618善化農會</option>
                                <option value="152">618新營農會</option>
                                <option value="153">618楠西農會</option>
                                <option value="154">618歸仁農會</option>
                                <option value="155">618鹽水農會</option>
                                <option value="156">619大社農會</option>
                                <option value="157">619大寮農會</option>
                                <option value="158">619大樹農會</option>
                                <option value="159">619小港農會</option>
                                <option value="160">619仁武農會</option>
                                <option value="161">619內門農會</option>
                                <option value="162">619六龜農會</option>
                                <option value="163">619永安農會</option>
                                <option value="164">619田寮農會</option>
                                <option value="165">619甲仙農會</option>
                                <option value="166">619杉林農會</option>
                                <option value="167">619岡山農會</option>
                                <option value="168">619林園農會</option>
                                <option value="169">619阿蓮農會</option>
                                <option value="170">619美濃農會</option>
                                <option value="171">619茄萣農會</option>
                                <option value="172">619梓官農會</option>
                                <option value="173">619鳥松農會</option>
                                <option value="174">619湖內農會</option>
                                <option value="175">619路竹農會</option>
                                <option value="176">619鳳山農會</option>
                                <option value="177">619橋頭農會</option>
                                <option value="178">619燕巢農會</option>
                                <option value="179">619彌陀農會</option>
                                <option value="180">620九如農會</option>
                                <option value="181">620竹田農會</option>
                                <option value="182">620車城農會</option>
                                <option value="183">620里港農會</option>
                                <option value="184">620佳冬農會</option>
                                <option value="185">620東港農會</option>
                                <option value="186">620枋山農會</option>
                                <option value="187">620枋寮農會</option>
                                <option value="188">620林邊農會</option>
                                <option value="189">620長治農會</option>
                                <option value="190">620南州農會</option>
                                <option value="191">620屏東市農會</option>
                                <option value="192">620屏東縣農會</option>
                                <option value="193">620恆春農會</option>
                                <option value="194">620崁頂農會</option>
                                <option value="195">620琉球農會</option>
                                <option value="196">620高樹農會</option>
                                <option value="197">620新園農會</option>
                                <option value="198">620萬丹農會</option>
                                <option value="199">620萬巒農會</option>
                                <option value="200">620潮州農會</option>
                                <option value="201">620麟洛農會</option>
                                <option value="202">621吉安農會</option>
                                <option value="203">621富里農會</option>
                                <option value="204">621新秀農會</option>
                                <option value="205">621壽豐農會</option>
                                <option value="206">622太麻里農會</option>
                                <option value="207">622台東農會</option>
                                <option value="208">622成功農會</option>
                                <option value="209">622池上農會</option>
                                <option value="210">622東河農會</option>
                                <option value="211">622長濱農會</option>
                                <option value="212">622鹿野農會</option>
                                <option value="213">622關山農會</option>
                                <option value="214">624澎湖農會</option>
                                <option value="215">625臺中農會</option>
                                <option value="216">627連江縣農會</option>
                                <option value="217">700中華郵政</option>
                                <option value="218">803聯邦銀行</option>
                                <option value="219">805遠東銀行</option>
                                <option value="220">806元大銀行</option>
                                <option value="221">807永豐銀行</option>
                                <option value="222">808玉山銀行</option>
                                <option value="223">809凱基銀行</option>
                                <option value="224">810星展(台灣)銀行</option>
                                <option value="225">812台新銀行</option>
                                <option value="226">814大眾銀行</option>
                                <option value="227">815日盛銀行</option>
                                <option value="228">816安泰銀行</option>
                                <option value="229">822中國信託</option>
                                <option value="230">903汐止農會</option>
                                <option value="231">910桃園漁會</option>
                                <option value="232">910新竹漁會</option>
                                <option value="233">910八德農會</option>
                                <option value="234">910大園農會</option>
                                <option value="235">910大溪農會</option>
                                <option value="236">910平鎮農會</option>
                                <option value="237">910桃園農會</option>
                                <option value="238">910復興農會</option>
                                <option value="239">910新屋農會</option>
                                <option value="240">910楊梅農會</option>
                                <option value="241">910龍潭農會</option>
                                <option value="242">910龜山農會</option>
                                <option value="243">910蘆竹農會</option>
                                <option value="244">910觀音農會</option>
                                <option value="245">922臺南農會</option>
                                <option value="246">928大里農會</option>
                                <option value="247">928冬山農會</option>
                                <option value="248">928板橋農會</option>
                                <option value="249">928草屯農會</option>
                                <option value="250">928新莊農會</option>
                                <option value="251">951基隆漁會</option>
                                <option value="252">951瑞芳漁會</option>
                                <option value="253">951萬里漁會</option>
                                <option value="254">951頭城漁會</option>
                                <option value="255">951蘇澳漁會</option>
                                <option value="256">951八里農會</option>
                                <option value="257">951三芝農會</option>
                                <option value="258">951三星農會</option>
                                <option value="259">951三重農會</option>
                                <option value="260">951三峽農會</option>
                                <option value="261">951土城農會</option>
                                <option value="262">951士林農會</option>
                                <option value="263">951中和農會</option>
                                <option value="264">951中華民國農會</option>
                                <option value="265">951五股農會</option>
                                <option value="266">951五結農會</option>
                                <option value="267">951內湖農會</option>
                                <option value="268">951木柵農會</option>
                                <option value="269">951北投農會</option>
                                <option value="270">951北埔農會</option>
                                <option value="271">951平溪農會</option>
                                <option value="272">951石門農會</option>
                                <option value="273">951石碇農會</option>
                                <option value="274">951竹北農會</option>
                                <option value="275">951竹東農會</option>
                                <option value="276">951壯圍農會</option>
                                <option value="277">933芎林農會</option>
                                <option value="278">951坪林農會</option>
                                <option value="279">951宜蘭農會</option>
                                <option value="280">951林口農會</option>
                                <option value="281">951金山農會</option>
                                <option value="282">951南港農會</option>
                                <option value="283">951後龍農會</option>
                                <option value="284">951員山農會</option>
                                <option value="285">951峨眉農會</option>
                                <option value="286">951泰山農會</option>
                                <option value="287">951基隆農會</option>
                                <option value="288">951淡水農會</option>
                                <option value="289">951深坑農會</option>
                                <option value="290">951景美農會</option>
                                <option value="291">951湖口農會</option>
                                <option value="292">951新竹農會</option>
                                <option value="293">951新店農會</option>
                                <option value="294">951新埔農會</option>
                                <option value="295">951新豐農會</option>
                                <option value="296">951瑞芳農會</option>
                                <option value="297">951樹林農會</option>
                                <option value="298">951橫山農會</option>
                                <option value="299">951頭城農會</option>
                                <option value="300">951羅東農會</option>
                                <option value="301">951關西農會</option>
                                <option value="302">951寶山農會</option>
                                <option value="303">951蘆洲農會</option>
                                <option value="304">951蘇澳農會</option>
                                <option value="305">951鶯歌農會</option>
                                <option value="306">954二水農會</option>
                                <option value="307">954三灣農會</option>
                                <option value="308">954土庫農會</option>
                                <option value="309">954大甲農會</option>
                                <option value="310">954大安農會</option>
                                <option value="311">954大村農會</option>
                                <option value="312">954大城農會</option>
                                <option value="313">954大湖農會</option>
                                <option value="314">954大雅農會</option>
                                <option value="315">954山上農會</option>
                                <option value="316">954中埔農會</option>
                                <option value="317">954元長農會</option>
                                <option value="318">954內埔農會</option>
                                <option value="319">954公館農會</option>
                                <option value="320">954太平農會</option>
                                <option value="321">954水里農會</option>
                                <option value="322">954水林農會</option>
                                <option value="323">954北港農會</option>
                                <option value="324">954外埔農會</option>
                                <option value="325">954左鎮農會</option>
                                <option value="326">954玉溪農會</option>
                                <option value="327">954田中農會</option>
                                <option value="328">954白河農會</option>
                                <option value="329">954石岡農會</option>
                                <option value="330">954光豐農會</option>
                                <option value="331">954后里農會</option>
                                <option value="332">574竹山農會</option>
                                <option value="333">954竹南農會</option>
                                <option value="334">954沙鹿農會</option>
                                <option value="335">954卓蘭農會</option>
                                <option value="336">954和平農會</option>
                                <option value="337">954和美農會</option>
                                <option value="338">954東山農會</option>
                                <option value="339">954東勢鄉農會</option>
                                <option value="340">954東勢區農會</option>
                                <option value="341">642社頭農會</option>
                                <option value="342">954花蓮農會</option>
                                <option value="343">954花壇農會</option>
                                <option value="344">954阿里山農會</option>
                                <option value="345">954信義農會</option>
                                <option value="346">954南投農會</option>
                                <option value="347">954後壁農會</option>
                                <option value="348">954柳營農會</option>
                                <option value="349">954苑裡農會</option>
                                <option value="350">954苗栗農會</option>
                                <option value="351">954埔里農會</option>
                                <option value="352">954埔鹽農會</option>
                                <option value="353">954烏日農會</option>
                                <option value="354">954國姓農會</option>
                                <option value="355">954清水農會</option>
                                <option value="356">954通霄農會</option>
                                <option value="357">954造橋農會</option>
                                <option value="358">577魚池農會</option>
                                <option value="359">954鹿港農會</option>
                                <option value="360">954麥寮農會</option>
                                <option value="361">954新化農會</option>
                                <option value="362">954新社農會</option>
                                <option value="363">954溪湖農會</option>
                                <option value="364">954獅潭農會</option>
                                <option value="365">954瑞穗農會</option>
                                <option value="366">954銅鑼農會</option>
                                <option value="367">954鳳榮農會</option>
                                <option value="368">954潭子農會</option>
                                <option value="369">954學甲農會</option>
                                <option value="370">954頭份農會</option>
                                <option value="371">954頭屋農會</option>
                                <option value="372">954龍井農會</option>
                                <option value="373">954龍崎農會</option>
                                <option value="374">954礁溪農會</option>
                                <option value="375">954關廟農會</option>
                                <option value="376">954霧峰農會</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">分行名称</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="bank_branch" name="bank_branch" value="XXXX"
                                placeholder="分行名称" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">银行帐号</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="bank_account" name="bank_account" value="測試帳號"
                                placeholder="银行帐号" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">银行户名</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="account_name" name="account_name" value="測試戶名"
                                placeholder="银行户名" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
                              <a class='btn btn-danger'
                                href='Member_index.php?'>取消</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!-- 主要内容 结束 -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div>
        <!-- /.page-content -->
      </div>
    </div><!-- /.main-content -->
    <?php include "include/in_footer.php"?>
  </div><!-- /.main-container -->
  <div id="sound"></div>
  <!-- ace scripts -->
  <script src="js/ace-elements.min.js"></script>
  <script src="js/ace.min.js"></script>
</body>

</html>
