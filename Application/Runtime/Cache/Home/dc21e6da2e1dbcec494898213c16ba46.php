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
                    <li><a href="<?php echo U('Manual/manual');?>">Manual</a></li>
                    <li><a href="<?php echo U('Downloads/downloads');?>">Downloads</a></li>
                    <li><a href="<?php echo U('Analysis/analysis');?>">Analysis</a></li>
                    <li><a href="<?php echo U('Search/search');?>" class="header-nav-active">Search</a>
                        <div id="header-subNav">
                            <div class="header-subNav">
                                <a href="<?php echo U('Genes/genes');?>">By Genes</a>
                                <a href="<?php echo U('Traits/traits');?>" >By Traits</a>
                                <a href="<?php echo U('Blast/Blast');?>" >By Blast</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="<?php echo U('Index/index');?>" >Home</a></li>
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
        <div class="main search">
           <h2 class="search-title">What's information you can get?</h2>
           <p>We've collected a comprehensive dataset of gene functional annotations, including trait ontology, gene ontology, metabolic pathway, and co-expression networks for as many genes as possible in maize and rice. All these gene functional annotation information were obtained from public available publications, collected and curated hand-by-hand for every deposited gene in our database. The public gene annotation was achieved either by bench experiments or by robust bioinformatic algorithms. If you are working on a specific functional gene or you are interested in the potential functional roles of a specific gene, you can use the tool of <a href="<?php echo U('Genes/genes');?>">"Search by genes"</a> to get the information of this gene, such as possible phenotypic variation this gene affects, biochemical pathways it is involved in, and the associated upstream or downstream genes fo this gene. If you are working in a specific traits, and want to know how many genes, which genetic or biochemical or co-expression pathways are involved in the regulation of trait development, you can use the tool of <a href="<?php echo U('Traits/traits');?>">"Search by trait"</a> to explore our database.</p>
           <p>Furthermore, if you are interested in a subset of genes, which may be obtained from the differential expression analysis by RNA-Seq or Microarray, you can explore our database by <a href="<?php echo U('Analysis/analysis');?>">"Analysis"</a> for the functional gene enrichment in four different types of functional classifications - trait ontology, gene ontology, metabolic pathway, and co-expression networks.</p>
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