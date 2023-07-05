<?php
/**
 * @package Yeni
 * @subpackage Yeni
 * @since Yeni 1.0
 */

/*
Template Name: Quran Kerim
*/
?>

<?php get_header(); ?>

<main>
<!--Main layout-->
<div class="container">
    <div class="row">
        <!--Main column-->
        <div class="col-md-9">
            <?php
            if ( have_posts() ) {
            while ( have_posts() ) {
            the_post();
            ?>
            <!--Post-->
            <?php get_template_part('content'); ?>
			<!--/.Post<hr>-->
            
            <?php
				// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) :comments_template();
				//endif;
            } // end while
            } // end if
            ?>
        </div>
        <!--/Main column-->
        <!--Sidebar-->
		<div class="col-md-3 text-right">
			<div class="card mb3">
				<h5 class="card-header text-center text-white bg-primary z-depth-2">سۈرىلەر</h5>
				<div id="DataList1" class="card-text">
				<ul class="list-group">
					<li class="sure-list"><a id="DataList1_Sura_numLabel_0" title="‏7 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=1">‏1 - سۈرە فاتىھە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_1" title="‏286 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=2">‏2 - سۈرە بەقەرە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_2" title="‏200 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=3">‏3 - سۈرە ئال ئىمران</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_3" title="‏176 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=4">‏4 - سۈرە نىسا</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_4" title="‏120 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=5">‏5 - سۈرە مائىد</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_5" title="‏165 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=6">‏6 - سۈرە ئەنئام</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_6" title="‏206 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=7">‏7 - سۈرە ئەئراف</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_7" title="‏75 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=8">‏8 - سۈرە ئەنفال</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_8" title="‏129 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=9">‏9 - سۈرە تەۋبە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_9" title="‏109 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=10">‏10 - سۈرە يۇنۇس</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_10" title="‏123 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=11">‏11 - سۈرە ھۇد</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_11" title="‏111 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=12">‏12 - سۈرە يۈسۈف</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_12" title="‏43 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=13">‏13 - سۈرە رەئىد</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_13" title="‏52 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=14">‏14 - سۈرە ئىبراھىم</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_14" title="‏99 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=15">‏15 - سۈرە ھىجىر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_15" title="‏128 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=16">‏16 - سۈرە نەھىل</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_16" title="‏111 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=17">‏17 - سۈرە بەنى ئىسرائىل</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_17" title="‏110 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=18">‏18 - سۈرە كەھف</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_18" title="‏98 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=19">‏19 - سۈرە مەريەم</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_19" title="‏135 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=20">‏20 - سۈرە تاھا</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_20" title="‏112 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=21">‏21 - سۈرە ئەنبىيا</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_21" title="‏78 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=22">‏22 - سۈرە ھەج</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_22" title="‏118 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=23">‏23 - سۈرە مۆئمىنۇن</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_23" title="‏64 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=24">‏24 - سۈرە نۇر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_24" title="‏77 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=25">‏25 - سۈرە فۇرقان</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_25" title="‏227 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=26">‏26 - سۈرە شۇئەرا</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_26" title="‏93 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=27">‏27 - سۈرە نەمىل</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_27" title="‏88 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=28">‏28 - سۈرە قەسەس</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_28" title="‏69 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=29">‏29 - سۈرە ئەنكەبۇت</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_29" title="‏60 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=30">‏30 - سۈرە رۇم</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_30" title="‏34 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=31">‏31 - سۈرە لوقمان</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_31" title="‏30 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=32">‏32 - سۈرە سەجدە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_32" title="‏73 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=33">‏33 - سۈرە ئەھزاب</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_33" title="‏54 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=34">‏34 - سۈرە سەبەئ</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_34" title="‏45 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=35">‏35 - سۈرە فاتىر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_35" title="‏83 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=36">‏36 - سۈرە ياسىن</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_36" title="‏182 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=37">‏37 - سۈرە ساففات</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_37" title="‏88 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=38">‏38 - سۈرە ساد</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_38" title="‏75 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=39">‏39 - سۈرە زۇمەر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_39" title="‏85 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=40">‏40 - سۈرە غافىر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_40" title="‏54 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=41">‏41 - سۈرە فۇسىلەت</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_41" title="‏53 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=42">‏42 - سۈرە شۇرا</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_42" title="‏89 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=43">‏43 - سۈرە زۇخرۇف</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_43" title="‏59 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=44">‏44 - سۈرە دۇخان</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_44" title="‏37 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=45">‏45 - سۈرە جاسىيە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_45" title="‏35 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=46">‏46 - سۈرە ئەھقاف</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_46" title="‏38 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=47">‏47 - سۈرە مۇھەممەد</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_47" title="‏29 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=48">‏48 - سۈرە فەتىھ</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_48" title="‏18 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=49">‏49 - سۈرە ھۇجۇرات</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_49" title="‏45 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=50">‏50 - سۈرە قاف</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_50" title="‏60 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=51">‏51 - سۈرە زارىيات</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_51" title="‏49 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=52">‏52 - سۈرە تۇر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_52" title="‏62 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=53">‏53 - سۈرە نەجىم</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_53" title="‏55 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=54">‏54 - سۈرە قەمەر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_54" title="‏78 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=55">‏55 - سۈرە رەھمان</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_55" title="‏96 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=56">‏56 - سۈرە ۋاقىئە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_56" title="‏29 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=57">‏57 - سۈرە ھەدىد</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_57" title="‏22 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=58">‏58 - سۈرە مۇجادىلە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_58" title="‏24 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=59">‏59 - سۈرە ھەشىر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_59" title="‏13 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=60">‏60 - سۈرە مۇمتەھنە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_60" title="‏14 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=61">‏61 - سۈرە سەپ</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_61" title="‏11 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=62">‏62 - سۈرە جۇمۇئە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_62" title="‏11 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=63">‏63 - سۈرە مۇنافىقۇن</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_63" title="‏18 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=64">‏64 - سۈرە تەغابۇن</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_64" title="‏12 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=65">‏65 - سۈرە تەلاق</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_65" title="‏12 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=66">‏66 - سۈرە تەھرىم</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_66" title="‏30 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=67">‏67 - سۈرە مۈلك</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_67" title="‏52 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=68">‏68 - سۈرە قەلەم</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_68" title="‏52 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=69">‏69 - سۈرە ھاققە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_69" title="‏44 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=70">‏70 - سۈرە مائارىج</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_70" title="‏28 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=71">‏71 - سۈرە نۇھ</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_71" title="‏28 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=72">‏72 - سۈرە جىن</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_72" title="‏20 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=73">‏73 - سۈرە مۇزەممىل</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_73" title="‏56 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=74">‏74 - سۈرە مۇدەسسىر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_74" title="‏40 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=75">‏75 - سۈرە قىيامە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_75" title="‏31 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=76">‏76 - سۈرە ئىنسان</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_76" title="‏50 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=77">‏77 - سۈرە مۇرسەلات</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_77" title="‏40 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=78">‏78 - سۈرە نەبە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_78" title="‏46 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=79">‏79 - سۈرە نازىئات</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_79" title="‏42 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=80">‏80 - سۈرە ئەبەسە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_80" title="‏29 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=81">‏81 - سۈرە تەكۋىر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_81" title="‏19 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=82">‏82 - سۈرە ئىنفىتار</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_82" title="‏36 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=83">‏83 - سۈرە مۇتەففىفىن</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_83" title="‏25 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=84">‏84 - سۈرە ئىنشىقاق</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_84" title="‏22 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=85">‏85 - سۈرە بۇرۇج</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_85" title="‏17 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=86">‏86 - سۈرە تارىق</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_86" title="‏19 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=87">‏87 - سۈرە ئەئلا</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_87" title="‏26 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=88">‏88 - سۈرە غاشىيە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_88" title="‏30 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=89">‏89 - سۈرە ھىجىر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_89" title="‏20 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=90">‏90 - سۈرە بەلەد</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_90" title="‏15 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=91">‏91 - سۈرە شەمىس</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_91" title="‏21 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=92">‏92 - سۈرە لەيل</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_92" title="‏11 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=93">‏93 - سۈرە زۇھا</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_93" title="‏8 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=94">‏94 - سۈرە ئىنشىراھ</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_94" title="‏8 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=95">‏95 - سۈرە تىن</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_95" title="‏19 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=96">‏96 - سۈرە ئەلەق</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_96" title="‏5 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=97">‏97 - سۈرە قەدر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_97" title="‏8 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=98">‏98 - سۈرە بەييىنە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_98" title="‏8 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=99">‏99 - سۈرە زەلزەلە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_99" title="‏11 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=100">‏100 - سۈرە ئادىيات</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_100" title="‏11 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=101">‏101 - سۈرە قارىئە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_101" title="‏8 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=102">‏102 - سۈرە تەكاسۇر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_102" title="‏3 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=103">‏103 - سۈرە ئەسر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_103" title="‏9 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=104">‏104 - سۈرە ھۇمەزە</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_104" title="‏5 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=105">‏105 - سۈرە فىل</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_105" title="‏4 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=106">‏106 - سۈرە قۇرەيش</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_106" title="‏7 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=107">‏107 - سۈرە مائۇن</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_107" title="‏3 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=108">‏108 - سۈرە كەۋسەر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_108" title="‏6 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=109">‏109 - سۈرە كافىرۇن</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_109" title="‏3 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=110">‏110 - سۈرە نەسىر</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_110" title="‏5 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=111">‏111 - سۈرە مەسەد</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_111" title="‏4 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=112">‏112 - سۈرە ئىخلاس</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_112" title="‏5 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=113">‏113 - سۈرە فەلەق</a></li>
					<li class="sure-list"><a id="DataList1_Sura_numLabel_113" title="‏6 ئايەت" class="list-group-item" href="ShowSure.aspx?ID=114">‏114 - سۈرە ناس</a></li>
				</ul>
			</div>
		</div>
    </div>
        <?php //get_sidebar(); ?>
        <!--/.Sidebar-->
    </div>
</div>
<!--/.Main layout-->
</main>

<?php get_footer(); ?>