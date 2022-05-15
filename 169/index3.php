<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RELATION.CO.KR_NO_169_2</title>
<script language="javascript">
//<!--
	function caTabclick(vTabNo)
	{
			var total = 4; //탭 개수+1 
			for(var k=1; k<total; k++)
			{
					if(vTabNo == k)
					{
							document.getElementById('caTab'+k).className ="ca_tab_on";
							document.getElementById('catab1_'+k).style.display="block";
					}
					else
					{
							document.getElementById('caTab'+k).className ="ca_tab_off";
							document.getElementById('catab1_'+k).style.display="none";
					}
			}
	}
 //-->
</script>
</head>
<body>
	
	<style>
		* {	margin:0; padding:0;	}
		#profile_txt_area									{	margin:50px auto; width:900px; }
		.career_tab 											{	position:relative; width:900px; display:inline-block;/*border-style:solid; border-color:rgb(0, 0, 0); border-width:0px 0px 1px 0px;*/  }
		.career_tab:after									{ content:""; position:absolute; left:0; bottom:0px; z-index:-1; width:100%; height:1px; background:#000;  }
		
		.career_tab div 									{	position:relative; display:block; float:left; width:150px;  font-size:14px; padding:10px 0 10px 0; text-align:center; box-sizing:border-box; border-style:solid; border-color:#ccc; border-width:1px 0px 0px 1px;	 }
		.career_tab div:last-child 				{ border-style:solid; border-color:#ccc; border-width:1px 1px 0px 1px;}
		.career_tab div.ca_tab_on 				{	width:150px; height:100%;  border-style:solid; border-color:rgb(0, 0, 0); border-width:1px 0px 0 1px; border-bottom-style:solid; border-bottom-color:#fff; border-bottom-width:1px; background:#fff;  }
		.career_tab div.ca_tab_on:after   {	content:""; position:absolute; right:-1px; top:-1px; z-index:2; display:block;  width:1px; height:41px; background-color:#000; 	}

	 .career_list 					{	float:left; width: 800px; margin-top:10px;   }
	 .career_list dl 				{	float:left; margin: 0px; padding: 0px;	}
	 .career_list dt 				{	height: 36px; color: rgb(87, 87, 87); line-height: 36px;	}
	 .career_list dt span 	{	width: 100px; color: rgb(151, 151, 151); padding-left: 13px; display: inline-block;	}
	 .career_list dd 				{	background: url("/images/common/dot_line.gif") repeat-x; height: 1px; display: block;	}
	 .over_hidden 					{	overflow: hidden; float: left; display: inline;	}
	</style>

	<div id="profile_txt_area">
		<div class="career_tab">
			<div id="caTab1" class="ca_tab_on" 	onclick="caTabclick(1);">1受賞内訳</div>
			<div id="caTab2" class="ca_tab_off"	onclick="caTabclick(2);">2経歴事項</div>
			<div id="caTab3" class="ca_tab_off"	onclick="caTabclick(3);">3経歴事項</div>
		</div>

		<div id="catab1_1" class="career_list">
			<dl>
				<dt><span>2013</span>第8回ソウルドラマアワード　韓流ドラマ主題歌賞</dt>
				<dd></dd>
				<dt><span>2012</span>MBC演技大賞男子新人賞</dt>
				<dd></dd>
				<dt><span>2012</span>第29回ベストジーニスト2位</dt>
				<dd></dd>
				<dt><span>2012</span>第4回 Shorty Awards セレブリティ部門1位</dt>
				<dd></dd>
				<dt><span>2011</span>SBS 演技大賞ニュースター賞</dt>
				<dd></dd>
			</dl>
		</div>

		<div id="catab1_2" class="career_list" style="display:none;">
			<dl>
				<dt><span>2013.02</span>2014仁川アジア競技大会広報大使</dt>
				<dd></dd>
				<dt><span>2012.10</span>韓日交流総合展広報大使</dt>
				<dd></dd>
				<dt><span>2012.02</span>2012ソウル核安保首脳会議広報大使</dt>
				<dd></dd>
				<dt><span>2011.11</span>教育科学技術部「学校文化を変える」On-line広報大使</dt>
				<dd></dd>
			</dl>
		</div>
		
		<div id="catab1_3" class="career_list" style="display:none;">
			<dl>
				<dt><span>2013.02</span>2014仁川アジア競技大会広報大使</dt>
				<dd></dd>
				<dt><span>2012.10</span>韓日交流総合展広報大使</dt>
				<dd></dd>
				<dt><span>2012.02</span>2012ソウル核安保首脳会議広報大使</dt>
				<dd></dd>
				<dt><span>2011.11</span>教育科学技術部「学校文化を変える」On-line広報大使</dt>
				<dd></dd>
				<dt><span>2011.09</span>個人情報保護キャンペーン広報大使</dt>
				<dd></dd>
				<dt><span>2011.08</span>UN AIDSアジア太平洋地域広報大使</dt>
				<dd></dd>
			</dl>
		</div>
	</div>


</body>
</html>
