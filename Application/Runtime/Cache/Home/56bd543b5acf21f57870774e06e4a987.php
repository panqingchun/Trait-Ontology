<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
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
    <style>
    #info{
   /*word-wrap:break-word;*/
     /*font-weight: 800;*/
     /*color:red;*/
    /*font-family: '微软雅黑'；*/
}
#info th  {font-size: 20px;color:green;text-align:right;font-weight: lighter;}
#info #refgene th {font-size:25px;}
#info #refgene {font-size: 25px;color:black;}

#info tr:nth-child(even) {
      background-color:white;
}
#info tr:nth-child(odd) {
      background-color: #F1EFEC;
}

.gene-input{
    position: relative;
    z-index: 10;
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
        <div class="main-genes">
  
           
             <table id="wai">
                <tbody id="info">
                </tbody>   
                </table>
               <div id="fanhui">Go back</div> 
            <div class="gene-form">
                <h2>Search by traits</h2>
                    <div class="gene-input">
                        <legend for="species">Species:</legend>
                        <select change="" name="select" id="species">
                            <!-- <option value="none">--Please Select--</option> -->
                            <option value="Maize">Maize</option>
                            <option value="Rice">Rice</option>
                        </select>
                        <span class="gene-input-note">a dropbox which you can select species</span>
                    </div>
                    <!-- <div class="gene-input">
                        <legend for="study">Study:</legend>
                        <input type="text" id="study" placeholder="All studies">
                        <span class="gene-input-note">a dropbox where you can select study for your search</span>
                    </div>
                    <div class="gene-input">
                        <legend for="dist">LD Dist:</legend>
                        <input type="text" id="dist" placeholder="25 Kb">
                        <span class="gene-input-note">a dropbox where you can select LD for your search</span>
                    </div>
                    <div class="gene-input">
                        <legend for="top">Top percentile:</legend>
                        <input type="text" id="top" placeholder="100%">
                        <span class="gene-input-note">a dropbox where you can select best gene set</span>
                    </div> -->
                    <div class="gene-input">
                        <legend for="trait">Trait identifiers:</legend>
                        <!-- <select name=" select"  id="traitid">
                            <option value="none">--Please Select--</option>
                        </select> -->
                        <input  type="text" id="keyword" name="keyword" />
                        
                        <span class="gene-input-note">eg: Plant height </span>
                        <div id="searchBox"></div>
                    </div>
                    <!-- <div class="gene-text">
                        <legend for="geneid">Trait identifiers:</legend>
                        <textarea name="gene" id="geneid" cols="30" rows="10" placeholder="Traits List (Please separate the input by commas!)"></textarea>
                        <span class="gene-text-note">You can use human-readable name for the search,alth-<br>ough the trait term is defined according to the trait ontology database.</span>
                    </div> -->
                    
                    
                    <div class="gene-submit">
                    <h6></h6>
                        <button id="submit">Submit</button>
                        <button id="reset">Reset</button>
                    </div>


            </div>
            <div class="gene-tab" style="display:none";>
                <p id= 'download-link'>
                    Detailed information can be downloaded by the 
                    <a href="<?php echo U('Traits/download');?>">link</a>
                </p>
                <table class="table">
                <thead>
                 <tr >
                
               <th id="Gene_refGene">Gene_refGene</th>
                <th id="Trait">Trait</th>
                <th id="Level1">pvalue</th>
                <th id="Level2">Level6</th>
                <th id="Level3">Annotation</th>
                <th id="Level4">Ref_name</th>
            </tr>
            </thead> 
                 <tbody id="tbody">
                 <?php if(is_array($box)): $k = 0; $__LIST__ = $box;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                        <?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><td><?php echo ($v1); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            
    </table><br/>
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
<script>
    function loading(describe){
        var count = 0;
        if($('#mask').css('display') == 'none'){
          $('#mask').show();
          $('#mask-content').show();
          $('html,body').addClass('ovfHiden');
        }
        setInterval(function(){
          var text = '';
          count++;
          for(var i = 0; i < count % 4; i++){
            text += '.';
          }
          $('#mask-content').text(describe+text);
        },1000)
        
    }
    
    function hiding(){
        $('#mask').hide();
        $('#mask-content').hide();
        $('html,body').removeClass('ovfHiden');
        count = 0;
    }
                        
$(document).ready(function() {
        var xhr = null;
        $("#keyword").keyup(function() {
           
            var inputText = $.trim(this.value);
            if (inputText != "") { //检测键盘输入的内容是否为空，为空就不发出请求  
                xhr = $.ajax({
                    type: 'GET',
                    url: "<?php echo U('Traits/get_ajax_crmname');?>",
                    cache: false,
                    //不从浏览器缓存中加载请求信息  
                    data: {
                        "keyword":inputText,
                        "species":$('#species').val()
                    },
                    //向服务器端发送的数据  
                    dataType: 'json',
                    //服务器返回数据的类型为json  
                    success: function(data) {
 
                        if (data&&data.length != 0) { //检测返回的结果是否为空 
                        // console.log(data[1]); 
                            var lists = "<ul>";
                            for(var i=0;i<data.length;i++){
                                lists += "<li>" + data[i] + "</li>";
                            }

                            lists += "</ul>";
                            $("#searchBox").html(lists).show(); //将搜索到的结果展示出来

                            $('ul').on('click','li',function(){
                            
                                $("#keyword").val($(this).text()); //点击某个li就会获取当前的值
                                $("#searchBox").hide();
                            });
                        } else {
                            $("#searchBox").hide();
                        }
                    }
                });
            } else {
                $("#searchBox").hide(); //没有查询结果就隐藏搜索框
            }
        });
    });

                     $("#submit").click(function(){
                        loading('Search trait');
                            $("#tbody").empty();
                            $.post("<?php echo U('Traits/search_trait');?>",
                              {
                                species:$("#species").val(),
                                keyword:$("#keyword").val()
                              },
                              function(data){ 
                                hiding();
                              if(data=="none"){alert("ERROR!!!");} 
                              else{                          
                                    $(".table").show();
                                    $(".gene-tab").show();
                                    $(".download-link").show();              
                    
                             for(var i=0;i<data.length;i++){
                                 $('#tbody').append("<tr id="+data[i].id+"><td>"+data[i].gene_refgene+"</td><td>"+data[i].trait+"</td><td>"+data[i].pvalue+"</td><td>"+data[i].level6+"</td><td>"+data[i].annotation+"</td><td>"+data[i].ref_name+"</td></tr>");
                                        }
                                        $("tr").click(function(){
                        $(".gene-form").hide();
                        $(".gene-tab").hide();

                        $.post("<?php echo U('Traits/info');?>",
                                {
                                    id:$(this).attr("id"),
                                    species:$("#species").val()
                                },
                        function(data){
                            $("#fanhui").show();
                            $("#wai").show();
                            if($("#species").val() == 'Rice'){
                                myhref = 'http://rice.plantbiology.msu.edu/cgi-bin/ORF_infopage.cgi?orf=';
                            }
                            if($("#species").val() == 'Maize'){
                                myhref = 'http://www.maizegdb.org/gene_center/gene/';
                            }
            $('#info').append("<tr id='refgene'><th>Gene_refGene:</th><td><a href='"+myhref+data.gene_refgene+"'>"+data.gene_refgene+
                        "</a></td></tr><tr><th>ID:</th><td>"+data.id+
                        "</td></tr><tr><th>ID_ref:</th><td>"+data.id_ref+
                        "</td></tr><tr><th>Trait:</th><td>"+data.trait+
                        "</td></tr><tr><th>Pvalue:</th><td>"+data.pvalue+
                        "</td></tr><tr><th>indel/snp:</th><td>"+data.indel_snp+
                        "</td></tr><tr><th>Chr_ref:</th><td>"+data.chr_ref+
                        "</td></tr><tr><th>Marker_name:</th><td>"+data.marker_name+
                        "</td></tr><tr><th>Marker_set:</th><td>"+data.marker_set+
                        "</td></tr><tr><th>Marker_location:</th><td>"+data.marker_location+
                        "</td></tr><tr><th>allele:</th><td>"+data.allele+
                        "</td></tr><tr><th>organ:</th><td>"+data.organ+
                        "</td></tr><tr><th>MAF:</th><td>"+data.maf+
                        "</td></tr><tr><th>Pop_type:</th><td>"+data.pop_type+
                        "</td></tr><tr><th>Pop_size:</th><td>"+data.pop_size+
                        "</td></tr><tr><th>Model:</th><td>"+data.model+
                        "</td></tr><tr><th>Genome_version:</th><td>"+data.genome_version+
                        "</td></tr><tr><th>Final_version:</th><td>"+data.final_version+
                        "</td></tr><tr><th>Chr:</th><td>"+data.chr+
                        "</td></tr><tr><th>Position:</th><td>"+data.position+
                        "</td></tr><tr><th>Ref:</th><td>"+data.ref+
                        "</td></tr><tr><th>Note:</th><td>"+data.note+
                        "</td></tr><tr><th>Ref_name:</th><td>"+data.ref_name+
                        "</td></tr><tr><th>Chr_gene:</th><td>"+data.chr_gene+
                        "</td></tr><tr><th>start:</th><td>"+data.start+
                        "</td></tr><tr><th>New_gene:</th><td>"+data.new_gene+
                        "</td></tr><tr><th>Annotation:</th><td>"+data.annotation+
                        "</td></tr><tr><th>Level1:</th><td>"+data.level1+
                        "</td></tr><tr><th>Level2:</th><td>"+data.level2+
                        "</td></tr><tr><th>Level3:</th><td>"+data.level3+
                        "</td></tr><tr><th>Level4:</th><td>"+data.level4+
                        "</td></tr><tr><th>Level5:</th><td>"+data.level5+
                        "</td></tr><tr><th>Level6:</th><td>"+data.level6+
                        "</td></tr><tr><th>GO_id:</th><td>"+data.go_id.replace(/;/g,' ')+
                        "</td></tr>");
                             
                                });
                         $("#fanhui").click(function(){
                       $("#fanhui").hide();
                       $("#wai").hide();
                       $("#info").empty();
                       $(".gene-tab").show();
                       $(".gene-form").show();
             });
                            });  
                           }                                   
                              });


                    });
                  $("#reset").click(function(){
                 window.location.reload();
            });
                   
</script>
</html>