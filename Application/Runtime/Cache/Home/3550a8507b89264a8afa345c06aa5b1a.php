<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOenrichment</title>
    <!-- 网站ICON -->
    <link rel = "Shortcut Icon" href="/julei-0917/Public/image/yu.ico"> 
    <!-- 引入样式文件 style.css  -->
    <link rel="stylesheet" type="text/css" href="/julei-0917/Public/css/index.css">
    <script src="/julei-0917/Public/js/jquery.min.js"></script>
    <script src="/julei-0917/Public/js/echarts.min.js"></script>
    <script type="text/javascript" src="/julei-0917/Public/multiselect/jquery-ui.js"></script>  
    <script type="text/javascript" src="/julei-0917/Public/multiselect/jquery.multiselect.js"></script>   
    <link rel="stylesheet" type="text/css" href="/julei-0917/Public/multiselect/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/julei-0917/Public/multiselect/jquery.multiselect.css">
    <style type="text/css">
    #table2 h3,#table3 h3,#table4 h3{
        margin: auto;
        font-size:50px;
        font-weight: 100;
        font-family: "lucida Grande",Verdana,"Microsoft YaHei";
    }
    #trait_input{
        position: relative;
        z-index: 1;
    }
    #searchBox{
        width: 278px;
        height: 300px;
        background:#fff;
        border:1px solid #aaa;
        position: absolute;
        display: none;
        overflow-x: hidden;
        overflow-y: scroll;
        left:250px;
    }
    #searchBox ul li{
        list-style:none;
        cursor: pointer;
        padding-left: 10px;
        font-size:14px;
        line-height: 20px; 
    }
    #searchBox ul li:hover{
        background:#f0f0f0;
    }
    .ui-helper-reset {
        /* background: rgba(104, 176, 77, 1);
         */
        border-bottom:2px solid #F0BD4E;
    }
    .ui-helper-reset li{
        display:inline;
        text-decoration:none;
        line-height: 40px;
    }
    .ui-helper-reset li a{
        text-decoration:none;
    }
    .ui-multiselect-checkboxes li{
        display:block;
        line-height: 17px;
        /* background: #ffffff */
    }
    
.infor-input span {
    line-height: 30px;
}
.infor-input button{
    height: 30px;
    overflow: hidden;
}
.infor-input select,.infor-input input {
   width: 280px;
   height: 40px;
   font-size: 17px;
   float: left;
   border:3px solid rgba(104, 176, 77, 1);
   margin-right: 10px;
   margin-bottom: 10px;
   padding-left: 10px;
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
}
.ginfor-input, {
	clear:both;
}
.infor-input legend {
	float: left;
	color: rgb(104, 176, 77);
    font-weight: bold;
    width: 180px;
    margin-left:70px;
    font-size: 20px;
    line-height: 40px;
} 
#study{height:200px;
    font-size:12px;
    line-height:15px;
}


ui-multiselect-checkboxes{
    overflow: auto;
    height: 200px;
}

.ui-multiselect-menu {
    z-index: 99;
}
.enrich_table{
    border: 2px solid rgba(186, 218, 85, 1);
    border-radius: 20px;
    padding:5px;
    text-align: center;
    width: 800px;
    /* height: 150px; */
    margin: 0 auto;
    font-size: 15px;
}
.enrich_table tr{
    cursor: auto;
}
.enrich_table tr{
    background: rgb(226,239,218);
}
.enrich_table tr th{
    background: rgb(169,208,142);
    height:40px;
}
a{
    cursor:pointer;
}
#download{
    margin-top: 60px;
    margin-left: 300px;
    margin-bottom: 10px;
}
.botton_download{
    border: none;
    color:rgb(108, 179, 79);
    text-decoration: underline;
}
#PC_down,#GO_down,#TO_down{
    display:none;
}


.ui-multiselect-menu {
    z-index: 99;
}

.main-info {
    box-sizing: border-box;
    margin: 20px auto 200px;
    width: 980px;
    padding: 40px 20px;
    border: 2px solid rgba(186, 218, 85, 1);
}
.main-info p {
    font-size: 30px;
    color: #606060;
    display: inline-block;
    width: 900px;
    text-align:center;
}
.main-info button {
    font-size: 16px;
    display: inline-block;
    padding: 5px 8px;
    color: #ddd;
    background-color: green;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    vertical-align: bottom;
    line-height: 26px;
    margin-left:-100px;
}

.main-info button:hover {
    color:#fff;
    background:rgb(0,160,0);
}

.info-module {
    margin: 30px 30px 30px 50px;
    display: inline-block;
}
.info-module table tr, .info-co table tr{
    background:rgba(104,176,77,0.5);
    color:#1f1f1f;
    line-height:30px;
    text-align:center;
    cursor:pointer;
}
.info-module table tr:hover, .info-co table tr:hover{
    background:#36F233;
}
#tab-content1 table tr{
    color:#1f1f1f;
    line-height:30px;
    text-align:center;
    cursor:pointer;
}
#tab-content1 table tr th{
    background:rgba(104,176,77,0.5);
}
.tr_td:hover {
    background:#36F233;
}

.info-co {
     margin: 30px 30px 30px 30px;
     display: inline-block;
     vertical-align:top;
}


.info-moudle table{
    border-collapse: collapse;
    border: 1px solid #ddd;
    font-family: '微软雅黑';
    font-size: 10px;
}

#info-table-gene {
    width: 160px;
}

#info-table-value {
    width: 100px;
}
#info-table-name {
    width: 50px;
}
caption {
   background:#27C42E;
   color:#D9F5E8;
   line-height:35px;
   font-weight:bold;
}
.info-module table .yes {
    color:#B63E11;
    font-weight:bold;
    font-family:'微软雅黑';
}
.info-module table .no{
    color:#0D6962;
    font-weight:bold;
    font-family:'微软雅黑';
}

.download-link {
    margin-left: 20px;
    text-decoration: none;
    color: rgb(104,175,77);
}

.download-link:hover {
    text-decoration: underline;
    color: #359210;
}
.genes-down-button{
    text-decoration: underline;
    color: #666;
    display: inline-block;
    border: none;
    cursor: pointer;
    padding-left: 30px;
    vertical-align: super;
}
.genes-down-button:hover {
    color: rgb(104, 145, 87); 
}
#genes-down-info {
    display: inline-block;
    width: 600px;
    color: green;
    margin-left: 60px;
    margin-top: 20px;
    font-size: 14px;
}
.p_example{
    background:#F0BD4E;
    cursor:pointer;
}
.v4_example{
    background:#F0BD4E;
    cursor:pointer;
}
.gene-tab p{
    color: rgb(63, 102, 48);
    font-family: Tahoma, Geneva, sans-serif;
    margin-bottom: 20px;
    font-size: 30px;
}
.tab_com table{
    margin-top:10px; 
    color:#333;
    font-size:14px;
    font-weight: 400;
    border-collapse: collapse;
}
.tab_com table th{
    border:1px solid #a8a8a8;
    padding:3px 8px;
    line-height: 22px;
    background: rgba(104,176,77,0.5);
}
.tab_com table td{
    border:1px solid #a8a8a8;
    padding:3px 8px;
    line-height: 18px;
}
.tab_com ul{
    margin-top:10px;
}
.tab_com li{
    list-style:none;
    color:#666;
    font-size: 12px;
    line-height: 12px;
    padding-top: 2px;
}
#table-module {
    display: inline-block;
    vertical-align: top;
    margin-left: 50px;
}
#table-co {
    display: inline-block;    
    margin-left: 20px;
}
.over_hidden{
    width:800px;
    overflow-x: scroll;
}
hr {
    border: 2px rgb(47, 138, 47) solid;
}

   </style>
</head>
<body>
    <!-- 背景图片 -->
    <div id="bg-genes"></div>

    <!-- 头部 -->
    <header>
        <div class="header">
            <a href="" class="header-logo">
                <span class="header-logo-icon"> ® </span>
                <h1 class="header-logo-name">TO enrichment</h1>
                <div class="header-logo-dec">
                    An integrative platform of gene functional annotation
                </div>
            </a>

            <nav class="header-nav">
                <ul>
                    <li><a href="<?php echo U('Manual/manual');?>">Manual</a></li>
                    <li><a href="<?php echo U('Downloads/downloads');?>">Downloads</a></li>
                    <li><a href="<?php echo U('Analysis/analysis');?>" class="header-nav-active">Analysis</a></li>
                    <li><a href="<?php echo U('Search/search');?>">Search</a>
                        <div id="header-subNav">
                            <div class="header-subNav">
                                <a href="<?php echo U('Genes/genes');?>">By Genes</a>
                                <a href="<?php echo U('Traits/traits');?>" >By Traits</a>
                                <a href="<?php echo U('Blast/Blast');?>" >By Blast</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="<?php echo U('Index/index');?>">Home</a></li>
                </ul>
            </nav>

            <div class="header-info">
                This is an integrative gene function annotation database, including trait ontology,
                gene ontology, metabolic pathway, and co-expression network information,
                which provides a complete exploration of gene functional roles and comprehensive 
                functional enrichment analysis of a subset of genes of particular interest.
            </div>
        </div>
    </header>

    <div class="container">
        <!-- 中间主体部分 -->
        <div class="main-genes">
            <div class="gene-form">
                <h2>Gene functional enrichment</h2>
                <form>
                    <div class="gene-input">
                        <legend for="species">Species:</legend>
                        <select name="select" id="species">
                            <option value="Maize">Maize</option>
                            <option value="Rice">Rice</option>
                        </select>
                        <span class="gene-input-note">a dropbox which you can select species</span>
                    </div> 
                    <div class="gene-input">
                        <legend for="Type" >Type:</legend>
                        <select name="select" id="ty">
                            <option value="Gene">Gene</option>
                            <option value="Trait">Trait</option>
                        </select>
                        <span class="gene-input-note">a dropbox which you can select type</span>
                    </div> 
                    <div class="gene-input">
                        <legend for="dist">LD Dist:</legend>
                        <select name="select" id="ld">
                            <option value="10Kb">10Kb</option>
                            <option value="25Kb">25Kb</option>
                        </select>
                        <span class="gene-input-note">a dropbox where you can select LD dist</span>
                    </div>
                    <div class="gene-input">
                        <legend for="top">Top percentile:</legend>
                        <select name="select" id="top">
                            <option value="1">100%</option>
                        </select>
                        <span class="gene-input-note">a dropbox where you can select best gene set</span>
                    </div>
                    <div class="gene-text" id="gene_input">
                        <legend for="geneid">Gene identifiers:</legend>
                        <textarea name="gene" id="geneid" cols="30" rows="10" placeholder="Gene List (Please separate the input by commas and blanks!)"></textarea>
                        <span class="gene-text-note">
                            For maize, please use identifiers from V3, <br/>
                            For rice, please use identifiers from MSU7.0, <br/>
                            The gene number of input must be greater than 10, <br/>
                            eg: GRMZM2G013821,GRMZM2G019799 <br/>
                            or: LOC_Os01g70110,LOC_Os01g55540 <br/>  
                            <button type="button" class="p_example">v3_example</button> <br/>
                            <button type="button" class="v4_example">v4_example</button>                       
                        </span>
                    </div>

                    <div class="gene-input" id="trait_input">
                        <legend for="species">Trait identifiers:</legend>
                        <!-- <select name="select" id="traitid"> 
                        </select> -->
                        <input type="text"  id="traitid">
                        <span class="gene-input-note">a dropbox which you can select traits</span>
                        <div id="searchBox"></div>
                    </div>
                    
                    <div class="gene-input infor-input">
                        <legend for="study">Study:</legend>
                        <select name="select" id="study" multiple="multiple" size="20" >
                        </select>
                        <span class="gene-input-note">a dropbox where you can select study for your search</span>
                    </div>

                    <h6></h6>
                    <div class="gene-submit">
                    <input class="ajax_href2" type="hidden" value="<?php echo U('Analysis/table2');?>"/>
                    <input class="ajax_href3" type="hidden" value="<?php echo U('Analysis/table3');?>"/>
                    <input class="ajax_href4" type="hidden" value="<?php echo U('Analysis/table4');?>"/>
                    <input class="ajax_href5" type="hidden" value="<?php echo U('Analysis/module');?>"/>
                    <input class="ajax_find" type="hidden" value="<?php echo U('Analysis/find_gene');?>"/>
                    <input class="find_infor" type="hidden" value="<?php echo U('Analysis/find_infor');?>"/>
                    <input class="printgene" type="hidden" value="<?php echo U('Analysis/printgene');?>"/>
                    <input class="v3tov4" type="hidden" value="<?php echo U('Genes/v4tov3');?>"/>
                    <!-- <input class="ajax_ajax" type="hidden" value="<?php echo U('analysis/ajax');?>"/> -->
                    <input class="ajax_ajax" type="hidden" value="<?php echo U('Traits/get_ajax_crmname');?>"/>
                    <a id="networkLink" href='../Analysis/co_download.html' display="none"></a>
                    <a id="unLink" href='../Analysis/un_download.html' display="none"></a>
                    <div class="button-submit">
                       <!--  <button id="submit_C" type="button">Coexpression</button>
                        <button id="submit_P" type="button">Plant Cycle</button>
                        <button id="submit_G" type="button">Gene Ontology</button>
                        <button id="submit_T" type="button">Trait Ontology</button>
                        </div> -->
                        <button id="submit_T" type="button">submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="gene-tab">
                <div class="all">
                    <div class="gene-tab-header">
                       <span id="tab1" class="gene-tab-active">Summary</span> 
                       <span id="tab2">Trait Ontology</span>
                       <span id="tab3">Gene Ontology</span>
                       <span id="tab4">Plant Cycle</span>
                       <span id="tab5">Coexpression</span>
                    </div>
                    <div id="tab-content1">
                        <img id="smallpic" src="/julei-0917/Public/image/allmodule.png" >
                    </div>
                    <div id="tab-content2" class="tab_com">
                        <p>Chart</p>
                        <div id="table2" style="width: 800px;height:600px;"></div>
                        <hr style="margin:30px 0">
                        <p>Table</p>
                        <div class="table_infor1">

                        </div>
                    </div>
                    <div id="tab-content3" class="tab_com">
                        <p>Chart</p>
                        <div id="table3" style="width: 800px;height:600px;"></div>
                        <hr style="margin:30px 0">
                        <p>Table</p>
                        <div class="table_infor2">
                        
                        </div>
                    </div>
                    <div id="tab-content4" class="tab_com">
                        <p>Chart</p>
                        <div id="table4" style="width: 800px;height:600px;"></div>
                        <hr style="margin:30px 0">
                        <p>Table</p>
                        <div class="table_infor3">

                        </div>
                    </div>
                    <div id="tab-content5" class="tab_com">
                        <p>Chart</p>
                        <div id="canvas_network" style="width: 900px;height:900px;"></div>
                        <hr style="margin:30px 0">
                        <p>Table</p>
                    </div>
                </div>
            </div>
 
        </div>
        <!-- 页脚 -->
        <footer>
            <div class="footer">
                <ul>
                    <li>
                        <a href="" class="header-logo">
                            <span class="header-logo-icon"> ® </span>
                            <h1 class="header-logo-name">TO enrichment</h1>
                            <div class="header-logo-dec">
                                An integrative platform of gene functional annotation
                            </div>
                        </a>
                    </li>
                    <li class="footer-info" style="text-align:justify;">
                        © 2017 by Maize Germplasm and Systems Biology Lab at HZAU, Template was adopted from
                        <a href="">Wix.com</a>
                    </li>
                    <li class="footer-info">No.1 Shizishan Street, Hongshan District, Wuhan, Hubei Province, 430070, P.R.China
                        <a href="">hzaulilin@mail.hzau.edu.cn</a>
                    </li>
                    <li class="footer-share">
                        <a href="">
                            <img src="/julei-0917/Public/image/f.png" alt="faceBook">
                        </a>
                        <a href="">
                            <img src="/julei-0917/Public/image/t.png" alt="Twitter">
                        </a>
                        <a href="">
                            <img src="/julei-0917/Public/image/g.png" alt="Google">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <div id="mask">
        <span id="mask-content">
            
        </span>
    </div>
</body>
<script type="text/javascript">
$(function(){
  //以下为初始配置参数，用户可自行配置，同时，可配置事件参数
  $('#study').multiselect({
     header: true,
     height: 200,
     minWidth: 225,
     classes: '',
     checkAllText: 'select all',
     uncheckAllText: 'desselect all',
     noneSelectedText: 'please select',
     selectedText: '# select',
     selectedList: 1,
     show: null,
     hide: null,
     autoOpen: true,
     multiple: true,
     position: {},
     appendTo: "body",
     menuWidth:null
   });
});


</script>
<script src="/julei-0917/Public/js/download_excel.js"></script>
<script src="/julei-0917/Public/js/analysis.js"></script>
</html>