<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>toenrichment</title>
    <!-- 网站ICON -->
    <link rel = "Shortcut Icon" href="image/favicon.ico"> 
    <!-- 引入样式文件 style.css  -->
    <link rel="stylesheet" type="text/css" href="/julei-0917/Public/css/index.css">
    <style>
    .main{
       background-color:  rgba(255, 255, 255, 0.9);
       padding-top:20px;
       font-family: Arial, Helvetica, sans-serif;
       color: #000000;
        text-align: justify;
    }
    .h2_head{
        border-bottom: 2px solid rgba(137, 191, 36, 0.53);
    }
    .main h2{    
    /* margin: 0; */
    margin-left: 3px;
    margin-bottom: 5px;
    line-height: normal;
    letter-spacing: normal;
    color:#68b04d;
    }
    .main .head_1{
        margin-top:10px;
    }
    .main span{
        font-size: 20px;
       font-weight: bold;
    }
    .h2_head span{
        font-weight: 200;
    }
    .manual{
      padding-top: 30px;
    }
    .manual img{
        display: block;
        margin: 20px auto;
    }
    .manual_head{
       margin-left: 30px;
        color:red;
        font-weight: 800;
    }
    table {
        width: 600px;
        margin:10px auto;
    }
    table tr {
        background:rgba(104,176,77,0.5);
        color:#1f1f1f;
        line-height:30px;
        text-align:center;
    }
    table tr:first-child {
        background:rgba(233, 229, 27, 0.7);
    }
    </style>

</head>
<body>
    
    <!-- 背景图片 -->
    <div id="bg"></div>

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
                    <li><a href="<?php echo U('Manual/manual');?>" class="header-nav-active">Manual</a></li>
                    <li><a href="<?php echo U('Downloads/downloads');?>">Downloads</a></li>
                    <li><a href="<?php echo U('Analysis/analysis');?>">Analysis</a></li>
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
        <div class="main">
            <div class="h2_head">
                <h2>Gene functional annotation and enrichment by TO</h2>
            </div>
            <div class="head_1">
                <span>TAS provides an user-friendly interface for gene functional annotation, enrichment analysis, genome-wide extraction of trait-specific genes, cross-checking of different functional annotation databases, and other features, which bridge genome and phenome in crops.</span>
            </div>
            <div class="manual">
                <span class="manual_head">1. Gene function search</span>
                <div class="manual_1">
                        <img src="/julei-0917/Public/image/manual1.png">
                        <p>&nbsp&nbsp&nbsp&nbsp Click Search to start your search, which can allow you to either get the annotated functional description of your query genes or obtain all the annotated genes associated with phenotypic variations.</p>
                </div>
                <div class="li_manual_1">
                        <span class="manual_head" style="color:rgb(137, 191, 36);">1.1 Search by genes</span>
                        <div class="manual_1">
                                <img src="/julei-0917/Public/image/manual2.png">
                                <p>&nbsp&nbsp&nbsp&nbsp First, select the species that you are working on through the dropbox; Then, input the query gene list of your interest in the text box of gene identifiers, and submit your query. The TO terms, which the query genes are associated with, will be listed below. For each gene-to-TO association item, you can either get a brief summary of the extent of association with phenotypic variation on the same page, or click the row of a specific gene to get a detailed association mapping results as follow:</p>
                                <img src="/julei-0917/Public/image/manual3.png">
                                <p>&nbsp&nbsp&nbsp&nbsp Alternatively, you can download all the gene-to-TO association information by link "Download". An excel file will be generated to hold the gene-to-TO association for all query genes.</p>
                            </div>
                </div> 
                <div class="li_manual_2">
                        <span class="manual_head" style="color:rgb(137, 191, 36);">1.2 Search by traits</span>
                        <div class="manual_1">
                                <img src="/julei-0917/Public/image/manual4.png">
                                <p>&nbsp&nbsp&nbsp&nbsp First, select the species that you are working on through the dropbox; Then, input the query trait of your interest in the text box of trait identifiers, and submit your query. The gene-to-TO terms, which the query trait is associated with, will be listed below. For each gene-to-TO association item, you can either get a brief summary of the extent of association with phenotypic variation on the same page, or click the row of a specific gene to get a detailed association mapping results as described above. Similarly, you can download all the gene-to-TO association information for the query trait by link "Download". An excel file will be generated to hold the gene-to-TO association for the trait of your interest.</p>
                        </div>
                </div>
            </div>
            <div class="manual">
                    <span class="manual_head">2. Functional enrichment in TO, GO, PC and CoExpNetworks</span>
                    <div class="manual_1">
                            <img src="/julei-0917/Public/image/manual5.png">
                            <p>&nbsp&nbsp&nbsp&nbsp Click Analysis to start your Functional enrichment analysis, which can allow you to get an all-in-one enrichment results in TO, GO, PC and CoExpNetworks for your query genes or trait. To do that, first of all, you need to set up all different parameters: Species, Type, which allow you to submit your query in the format of either gene list or phenotypic trait of your interest, LD Dist, which indicates the physical distance of linkage disequalibrium decay for the selection of different gene-to-trait associations, Top percentile, of which the association mapping results (gene-to-TO terms) in each study will be used for the enrichment analysis, and Study, by which you can select different association mapping studies for the functional enrichment analysis. Then, you can input either a gene list of your interest or a specific trait that you are interested in. Submit your functional enrichment analysis, you will get an all-in-one analyzed results on the same webpage as follow:</p>
                    </div>
                    <div class="manual_1">
                            <img src="/julei-0917/Public/image/manual6.webp">
                            <p>&nbsp&nbsp&nbsp&nbsp Similarly, you can download all the result information by the download link. Then you can carefully re-analyze all the functional annotation and enrichment results and cross-validate these results among TO, GO, PC and Co-expression networks. </p>
                    </div>

            </div>
            <div class="manual">
                <span class="manual_head">3. Downloads</span>
                <p>&nbsp&nbsp&nbsp&nbsp We've collected as many gene functional annotations as possible for TO, GO, PC and Co-expression networks, carefully curated these data one by one manually, and integrated all these datasets in out database. TO information were collected based on the association mapping studies in crops. The Co-expression networks were constructed using tons of transcriptomic RNA-Seq data in reference inbreds in maize and rice, respectively. However, GO and PC datasets were originally obtained from AgriGO (http://bioinfo.cau.edu.cn/agriGO/) and the Plant Cycle database (https://www.plantcyc.org/), respectively. If you use the GO and PC functional information, Please cite these original references. All the data that we've collected are public available through the links in the Download webpage as follow:</p>
                <img src="/julei-0917/Public/image/manual7.png">
            </div>
            <div class="manual">
                <span class="manual_head">4. Trait search name </span>
                <table>
                        <tbody>
                            <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" width="108" style="height:14.00pt;width:54.00pt;" x:str="">Species</td>
                                <td class="xl65" width="931.50" style="width:465.75pt;" x:str="">Trait search name</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">kernel resistance<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Aminobutyric acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">carotene</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Carotene/(Cryptoxanthin+Zeaxanthin)</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Carotene/Cryptoxanthin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Carotene/Zeinoxanthin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Carotenoids/Carotenoids</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Cryptoxanthin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">aT</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">T/(aT+rT)</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">aT/rT</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">rT3</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">rT3/(aT3+rT3)</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Xanthophylls/Xanthophylls</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">100 Kernel weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">1grain weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">1Kernel Weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">2-Ami1,3hexadecanetriol</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">3-Hydroxyethy4-meth1,2,3pentanetetrol</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">3',4',TricetinrhamnosO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">3o,4o,TricetO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">5-Hydroxyindoleacetic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">7-Ododecenoic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">9-Ooctadecenoic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">ABA</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">AGE</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Acetosyringone</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Acetylintermedine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Acid detergent fiber</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Adenine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Adenylic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">aflatoxin level</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">amount of aflatoxin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">anthesis to silking interval</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">anthessilking interval</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Apigenin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">ApigeninO-glucoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">ApigeninhexosC-pentoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">ApigeninpentosC-pentoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">ApigeninpentosO-coumaroylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Apigenin C-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">ApigenC-pentoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">area of the second leaf</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Area under Disease Progress Curve (AUDPC)</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Asparagine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Austricine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Average internode length (above ear)</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Average internode length (below ear)</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Average internode length (whole plant)</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Benzamidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Boxctransformed leaf angle</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Branch number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Branch zone</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Bufotenineglucoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C16:0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C16:0<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C16:0/C16:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C16:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C18:0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C18:0/C18:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C18:0/C20:0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C18:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C18:1/C18:2</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C18:1/C18:2<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C18:2</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C18:2/C18:3</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C18:3</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C180/C181</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C20:0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C20:0/C20:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C20:0/C22:0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C20:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C22:0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C22:0/C24:0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C24:0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Caffeic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Caffeic acid derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Caffeoyltryptamine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">cellulose</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Chlorophyll A</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Chlorophyll B</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Chlorophyll content (SPAD)</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Choline</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Chrysoeriol</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">ChrysoeriolhexosO-pentoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">ChrysoeriolhexosO-rhamnoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Chrysoeriol C-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">ChrysoeriolrhamnosO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">ChrysoeriO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Cob diameter</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Cob length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Cob weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">coefficient of variation days to anthesisys to anthesis</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">coefficient of variation days to anthesisys to silking</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Coumaroylserotonin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">C-pentosapigenincaffeoylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">days to anthesis</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Days to emergence</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Days to heading</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">days to silk</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Days to silking</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Diacylglycerol</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Diameter of the primary root</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Diaminopimelic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Dicoumaroylputrescine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Diferuloylputrescine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">DigalactosDiacylglycerol</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Indo3-lactic acid Indolelactic acid)</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Dopamine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.ABA0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.ABA7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.AGE0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.AGE7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.Dw0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.FSuc7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.Glc0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.Glc7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.Pa0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.Pa7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.Str0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.Suc7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">E.Tsug7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Ear diameter</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Ear Girth</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">ear height</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Ear leaf length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Ear leaf width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Ear Length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Ear row number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Early vigor</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Elaeokanine C</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">F suc</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Ferulic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Feruloylagmatine derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Feruloylserotonin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Feruloyltryptamine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Fructose</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Fructose 1diphosphate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Fumarate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Fusarium Ear Rot Resistance</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Glc</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Glucose</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Glutamate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">grain atoxin levels</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">grain yield</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">grain yield (ton/ha)</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">gray leaf spot disease</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Guanosine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Height above ear</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Height per day (until flowering)</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">hemicellulose</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Hesperetin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Hesperidin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">high rating resistance to northern corn leaf blight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">hundred kernels weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">in vitro dry matter digestibility</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">kernel number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Kernel Rows in Number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">kernel starch content</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Kernel width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Kernels per Row</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Kerner number per row</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.ABA0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.ABA7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.AGE0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.Glc0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.Pa0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.Pa7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.Pglc0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.Slw0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.Slw7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.Suc0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.Suc7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.Tsug0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L.Tsug7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-Aspartic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-Carnitine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">leaf dry weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">leaf length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Leaf necrosis</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Leaf number above ear</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">leaf width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Lehmbachol A</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-Glutamic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-Histidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">lignin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Linoleic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-Methionine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">LPCacyl 15:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">LPCacyl 16:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">LPCacyl 16:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">LPCacyl 18:0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">LPCacyl 18:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">LPCacyl 18:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">LPCacyl 18:1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">LPCacyl 18:2</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">LPCacyl 20:4</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-Phenylalanine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-Pipecolate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-Proline</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-saccharopine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-Serine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-Threonine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">L-Tryptophan</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Lutein</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">lutein:zeaxanthin ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Lysine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">maize lethal necrosis disease</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Maize rough dwarf disease</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Malate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">MalvidinO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Malvidin O-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">maximal quantum efficiency of PSII primary photochemistry<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Maximum Number of Roots</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">mean rating resistance to northern corn leaf blight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Methylchrysoeriolhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Monogalactosyldiacylglycerol</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">monomethyl ester</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N-(caffeoO-hexosidspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N-(coumaroO-hexosidspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N-(feruloO-hexosidspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N', NCoumaroyl, Feruloylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Ncaffeoyl,Ferulospermidine derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">NcoumaroN-feruloylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N',NFeruloyl,caffeospermidine derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N1, NDiferuloylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N1,NDicoumaroylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N-acetylneuraminic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Nalidixic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Naringenin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Naringenin derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N-Coumarospermidine derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N-Coumaroyltryptamine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Network Area</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">neutral detergent fiber</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N-Feruloyl,methoxyagmatine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N-Feruloylagmatine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">N-Feruloylputrescine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Nitrate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">node count</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Nodes above ear</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Nodes per plant</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Nodes to ear</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Norcinnamolaurine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Northern Leaf Blight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">O-AcetL-serine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">O-Acetylserine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">oil concentration</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">PA</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">PCA of metabolites: PC1</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">PCA of metabolites: PC2</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">p-Coumaric</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Phenylpyruvic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Phosphatidylcholine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Phosphatidylglycerol</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Phosphoric acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Photoperiod growidegree days to anthesis</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Photoperiod Growidegree days to silk</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">photosystem II (PSII) photochemistry</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Plant height</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Pro</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">PLeu</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Protein</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Pyridoxine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Quantum efficiency of PSI</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Quercetin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Ratio of dry shoot weight compare<span style="mso-spacerun:yes;">&nbsp; </span>to shoot length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Ratio of ear height to total height</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">relative ear position</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">relative fresh root weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">relative germination rate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">relative growth rates</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">relative leaf number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">relative root length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">relative root number in the germination stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">relative shoot length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">relative total fresh weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">relative total length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">relative water content</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">resistance to head smut</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Ribitol</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">rind penetrometer resistance</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Root Dry Weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Root weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.ABA0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.AGE0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.Dw0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.Glc0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.Glc7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.Pa0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.Pa7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.Pro0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.Str.L0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.Suc0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.Suc7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.Tsug0</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">S.Tsug7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Scopoletin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">score of resistance to A. flavus infection</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Selgin derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Serotonin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">SFA/USFA</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Shoot dry weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">shoot dry weight<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Shoot Length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Shoot water content</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Sinapic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Sinapoyl glucose</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">southern leaf blight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">southern leaf blight resistance</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">SPAD value at leaf 3</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">SPAD value at leaf 4</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">SPAD value at leaf 6</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">specific leaf area</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Spike length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Stalk strength</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Standard Root Length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">starch</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">stem damage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Suc</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Sucrose</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Sulfoquinovosyldiacylglycerol</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Surface Area</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">T sug</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Tassel branch number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Tassel length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Tassel main axis length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">tassel primary branch number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">the husk thickness</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">the husk width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">The median number of roots at alllocation</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">the number of husk layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">the ratio of the maximum to the median number of roots</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Thiamin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">tot sug</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Total Xanthophylls</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">total amino</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Total amino acids</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Total Carotenoids</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Total number of network pixels connected to a background pixel</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Total Number of Roots</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Total Plant Biomass</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Total Root Length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Triacylglyceride</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Tricin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Tricin O-(thrguaiacylglyceryl) etherhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Tricin derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">TricinpentosO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Trigonelline</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Triornicin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Tryptamine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">tunnel length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Tyrosine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">upper leaf angle</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Uracil</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Viscumamide</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Vitexin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Zeanoside B</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Zeaxanthin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Zeinoxanthin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">maize</td>
                                <td class="xl65" x:str="">Zeinoxanthin/Lutein</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">% of deviation from the linear regression between PLASTO and MGR</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">tra Carveol</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">[Fructose] in youngest source leaves</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">[Glucose] in youngest source leaves</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">[Glucose] in youngest source leaves<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Non Structural Carbohydrate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">10grain weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">12ab_ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">12chla</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">12chlb</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">12SPAD</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">12SPAD_FL</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">12total_chl</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">13ab_ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">13chla</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">13chlb</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">13SPAD</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">13SPAD_FL</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">13total_chl</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">3o,4o,TricetinO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">3o,4o,Tricetinmalonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">4Dihydroxyquinolinehexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">4-Hydro6-methylquinoli3-carboxylic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">4p-Coumaroylquinic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">4-Pyridoxic acidhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Adenosine_7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ADP_102</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Alkali spreading value</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">AMP_8</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Amylose content</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Angle to the vertical of the root cone</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">antioxidant capacity</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Apiculus color</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigeninO-glucoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigeninC-l-arabinos8l-arabinoside_67703</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigeninC-l-arabinos8l-arabinoside_7313, 6</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigeninC-glucoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigeninO-glucoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigeninO-rutinoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Apigeninpentoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Apigeninmalonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigenC-hexosiC-pentoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigenC-hexosiC-pentoside, 7</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigenC-hexosiO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigenC-hexosiO-rhamnoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigenC-hexosiO- hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ApigenO-hexosiO-rhamnoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Arabidopyl ketoadipic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Arabidopyl osmundalactone</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Arabidopyl shikimic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">arsenic</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Average leaf length<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Average leaf length/leaf width ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Average leaf perimeter</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Average leaf perimeter/leaf area ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Average leaf width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Awn presence</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Blast resistance</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">bound phenolic acid ABTS activity</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">bound phenolic acid DPPH activity</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">bound phenolic content</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Brown rice length/width ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Brown Rice Rate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Brown rice seed length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Brown rice seed width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Brown rice surface area</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Brown rice volume</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexos(apigenin 7,dimethyl ether)rhamnoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexosapigenincaffeoylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexosapigeninferuloylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexosapigeninhexosO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexosapigeninhexosO-hexosO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexosapigeninp-coumaroylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexoschrysoeriol p-coumaroylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexoschrysoeriolcaffeoylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexoschrysoeriolferuloylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexoschrysoeriolhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexosluteolinferuloylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexosluteolinhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexosluteolinp-coumaroylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-hexostricetinpentoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Chlorogenic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ChrioerisO-malonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Chrysinmalonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ChrysoeriolO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ChrysoeriolO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ChrysoeriolO-rutinoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Chrysoeriolhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ChrysoeriolferuloylhexosO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Chrysoeriolmalonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ChrysoeriC-hexosiC-pentoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ChrysoeriC-hexosiO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ChrysoeriC-hexosiO-rhamnoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ChrysoeriO-hexosiO-rhamnoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">cold tolerance at the seedling stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">copper</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-pentosapeigninferuloylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-pentosapigenin rhamnosO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-pentosapigenincaffeoylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-pentosapigeninhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-pentosapigeninp-coumaroylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-pentoschrysoeriolferuloylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-pentoschrysoeriolhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-pentosluteolinhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-pentosluteolinp-coumaroylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">C-pentosluteolC-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">CrysoeriC-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">CrysoeriO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Culm habit</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Culm length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">CyanidinO-glucoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Cyanidinrutinoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">darkness and in 10 cm sand culture</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">darkness and in 11 cm sand culture</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">darkness and in 5 cm sand culture</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">darkness and in 6 cm sand culture</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">darkness and in 7 cm sand culture</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">darkness and in 8 cm sand culture</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">darkness and in 9 cm sand culture</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">days to heading</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Deep root biomass</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Deep root proportion</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Deepest point reached by the roots in position in the plates</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Degree of Endosperm chalkiness</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Degree of seed</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Development rate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Chexosapigenin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Chexosapigenin derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Chexosmethylluteolin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Cpentosapigenin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Cpentosluteolin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">DIMBOA glucoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">drought resistant coefficient</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Drought tolerance</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Eriodictyolhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Eriodictyolmalonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ferulic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">field blast resistance<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Filled Grains Stress</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">filled spikelets number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Flag leaf length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Flag leaf length/width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Flag leaf width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">flavonoid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Florets per panicle</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Flowering date</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">flowering time</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Flowering time at Arberdeen</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Flowering time at Arkansas</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Flowering time at Faridpur</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">free phenolic acid ABTS activity</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">free phenolic acid DPPH activity</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">free phenolic content</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">FT ratio of Arkansas/Arberdeen</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">FT ratio of Faridpur/Arberdeen</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Gelatinization Temperature</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">germination percentage in aftripened seeds</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">germination percentage in freshly harvested seeds<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">grain fertility</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Grain length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Grain Length and Width Ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Grain length to width ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">grain length/width ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Grain lengthbreadth ration</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Grain number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">grain projected area</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Grain Thickness</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Grain weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Grain width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Grain yield per</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">grain yield per plant</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">green leaf area</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">green leaf area2</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">green leaf areaR</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">green leaf areaR4</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Green leaf color classification</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Green leaf number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Green leaf number on the plant</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">green leaves area_late booting stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">green leaves area_late tillering stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">green leaves area_milk grain stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Head Milled Rice Rate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Heading date</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">HesperetinO-glucoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Hull<span style="mso-spacerun:yes;">&nbsp; </span>color</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Hull color</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Ic threshold enabling tiller outgrowth</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Inosine monophosphate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Integrifoside A</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Isoorientin 7dimethyl ether, 8</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">IsoscoparinO-(feruloyglucopyranoside, 10</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">IsoscoparinO-(p-coumaroyglucopyranoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">IsovitexinO-(p-coumaroyglucopyranoside, 9</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Kynurenic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">L-Alanine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Last ligulated leaf length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Leaf<span style="mso-spacerun:yes;">&nbsp;&nbsp; </span>angle</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Leaf angle</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">leaf blade width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Leaf length standard deviation per plant</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">leaf number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Leaf pubescence</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">leaf width standard deviation</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">length of primary branch</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">length of secondary branch</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">L-Histidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Light conversion effciency</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">L-Isoleucine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">L-Leucine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">l-Leucine_5, 4</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">l-Methionine_3</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Lodging score</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Longest leaf length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">l-Proline_13</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">L-Threonine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">l-Tryptophan[fragment]_3, 2</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">L-Tyramine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Lupulin A</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">LuteolinC-glucoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Luteolinferuloylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Luteolinhexoside derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Luteolinsinapoylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Luteolinmalonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Luteol7glucoside_535, 12</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">LuteolC-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">LuteolC-hexosiC-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">LuteolC-hexosiC-pentoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">LuteolC-hexosiO-hexosicaffeoyl</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">LuteolC-hexosiO-hexosip-coumaroyl</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">LuteolC-pentosiO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">LuteolC-pentoside, 5</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">l-Valine_4</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Maximum leaf area</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Maximum leaf compactness</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Maximum leaf length/leaf width ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Maximum leaf perimeter/leaf area ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Maximum leaf width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Maximum root length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Meristem Growth Rate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">mesocotyl lengths of seedlings grown in water</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">methylApigeninhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">methylApigeninpentoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">methylapigeninrhamnoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">methylChrysoeriolO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">methylChrysoeriolhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">methylLuteolinhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">methylNaringeninpentoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">methylquercetinhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Milled Rice Rate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Mo</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N-(Pur6-ylcarbamoyl)threonine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N', NDiFeruloylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N', Np-Coumaroylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N', Np-Coumaroylspermine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N', NDiSinapoylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N', NFeruloyl, Caffeoylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N', Np-Coumaroyl, Feruloylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Na Content Stress</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Na/K Ratio Stress</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Naringeninhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Naringeninmalonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N-Caffeoylagmatine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N-Caffeoylputrescine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N-Caffeoylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N-Feruloylagmatine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N-Feruloylputrescine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N-Feruloylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N-Feruloylspermidine derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">NCoumaroylagmatine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">NCoumaroylputrescine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">NCoumaroylputrescine derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">NCoumaroylspermidine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">NCoumaroylspermidine derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N-Sinapoylagmatine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">N-Sinapoylputrescine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">number of primary branches</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Number of roots reaching 30 cm depth</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Number of roots reaching 31 cm depth</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Number of roots reaching 32 cm depth</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Number of roots reaching 33 cm depth</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Number of roots reaching 34 cm depth</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Number of roots reaching 35 cm depth</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Number of roots reaching 36 cm depth</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">number of secondary branches</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Number of spikelets per panicle</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">number of spikelets per secondary branch</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Number of tillers</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Number of tips</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">O-malonylhexoside derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Panicle exertion rate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Panicle fertility</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Panicle length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Panicle lengthant height<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Panicle number per plant</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Panicle type</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">p-coumaric acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">p-Coumaro2-hydroxyputrescine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Peonidinhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Percentage of Grains With Chalkiness</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Pericarp<span style="mso-spacerun:yes;">&nbsp; </span>Color</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Pericarp color</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Phellodenol H</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Phellodenol Hhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Phytocassane D</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Plant biomass</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">plant compactness_late booting stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">plant compactness_milk grain stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Plant height</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Plant Height Control</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">plant height_late booting stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">plant height_late tillering stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">plant height_milk grain stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Plastochron or phyllochron</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Primary branch length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Primary branch number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Primary panicle branch number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">proanthocyanidins content</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Productive Tillers Stress</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Protein content</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Pyridoxine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Pyridoxineglucoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Pyroglutamate_3</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">QuercetinO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Quercetinmalonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Relative dry weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Relative Growth Rate</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Relative plant height</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Relative SPAD</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Relative SPW</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Relative tiller number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">ResokaempferolO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root biomass</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 30 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 31 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 32 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 33 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 34 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 35 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 36 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 37 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 38 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 39 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 40 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 41 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 42 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 43 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 44 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 45 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 46 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 47 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 48 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass below 49 cm</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 20 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 21 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 22 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 23 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 30 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 31 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 32 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 33 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 34 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 35 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 36 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 37 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root dry mass in the 38 cm layer</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root surface area</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Root to shoot ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Sakuranetin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Secondary branch length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Secondary branch length<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Secondary branch number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Seed color<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Seed length</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Seed length/width ratio</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Seed number per panicle</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Seed surface area</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Seed volume</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Seed width</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">SelginO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Selginhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Selginhexoside derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Selginmalonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">SF Stress</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">shattering</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Shattering<span style="mso-spacerun:yes;">&nbsp; </span>degree</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Shattering degree</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Shoot biomass</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Shoot Dry Weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Shoot Dry Weight per plant</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">shoot dry weight_late tillering stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">shoot dry weight_milk grain stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">shoot fresh weight_late booting stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">shoot fresh weight_late tillering stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">shoot fresh weight_milk grain stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">sinapic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Sinapoyl quinic acid</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">slope parameter of the negative logarithmic equation computing SLA for successive leaf ranks<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Smiglaside A</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Smiglaside C</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">SNumber of effective tiller or panicle per Panicle lengthant</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Spermidine derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Spikelet<span style="mso-spacerun:yes;">&nbsp; </span>number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Spikelet Fertility Control</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Spikelet number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">spikelet number per panicle</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">spikelets per panicle</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Squaroot transformed leaf bronzing score</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">stress susceptibility index<span style="mso-spacerun:yes;">&nbsp;</span></td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Swertisin_692</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Syringenone</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">SyringetinO-rutinoside_5345</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Temperature</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Thousand Grain Weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">thousagrain weight</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Threonyl carbamoyl adenosine</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tiller angle</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tiller number</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tiller number per plant</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">tillers number_late booting stage</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Toringin</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">total flavonoid content</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">total leaf area</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">total phenolic</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">total phenolic content</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">trazeatinglucoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricetinmalonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricin O-(guaiacylglyceryl) etherO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricin O-(guaiacylglyceryl) etherO-hexosO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricinO-(erythguaiacylglyceryl) etherO-d-glucopyranoside, 13</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricin O-(syringyl alcohol) etherO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricinO-(thrguaiacylglyceryl) etherO-d-glucopyranoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricinO-d-glucopyranoside_3279, 15</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricinO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricinO-hexoside derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricinO-hexosO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricinO-O-d-glucopyranosyd-glucuronopyranoside, 16</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricinO-O-malonyd-glucopyranoside, 14</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricinO-neohesperidoside_5378</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricinO-rutinoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricin derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricin(syringyl alcohol) etherhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricinhexoside derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricinmalonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricinmalonylhexoside derivative</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricinp-coumaroO-glucuronide</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricinrhamnosO-malonylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricinsinapoylhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Tricinsyringiylglyceryl etherhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricO-glucuronide</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">TricglycerO-hexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Trigonelline</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Trigonelline 51</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Unfilled Grains Control</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Vitexin_364</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Volume of thick roots</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Xanthurenic acidhexoside</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">yield per plant</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">Yield/Plant Stress</td>
                               </tr>
                               <tr height="28" style="height:14.00pt;">
                                <td class="xl65" height="28" style="height:14.00pt;" x:str="">rice</td>
                                <td class="xl65" x:str="">zinc</td>
                               </tr>
                               <!--[if supportMisalignedColumns]-->
                                <tr width="0" style="display:none;">
                                 <td width="932" style="width:466;"></td>
                                </tr>
                               <!--[endif]-->
                              </tbody>
                </table>    
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
</body>
</html>