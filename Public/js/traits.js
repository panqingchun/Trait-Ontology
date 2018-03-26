
                           $("#species").change(function(){
                           $.post("{:U('Traits/print_trait')}",
                            {
                               species:$("#species option:selected").val()
                            },
                            function(data){
                                // var da =JSON.parse(data);
                                for(var i=0;i<data.length;i++)
                                // $("#traitid").append("<option value="+data[i].trait+">"+data[i].trait+"</option>");  
                                $("#traitid").append($('<option>').attr('value',data[i].trait).html(data[i].trait));
                            });

                     $("#submit").click(function(){
                            $.post("{:U('Traits/search_trait')}",
                              {
                                species:$("#species").val(),
                                traitid:$("#traitid").val()
                              },
                              function(data){
                                alert(data);
                              if(data==""){
                                alert("ERROR!");
                              }
                                else{
                                    $(".table").show();
                                    $(".download").show();
                                    $("#submit").hide();
                                    $("#submit2").show();

                             for(var i=0;i<data.length;i++){
                                 $('#tbody').append("<tr><td>"+data[i].gene_refgene+"</td><td>"+data[i].trait+"</td><td>"+data[i].level1+"</td><td>"+data[i].level2+"</td><td>"+data[i].level3+"</td><td>"+data[i].level4+"</td><td>"+data[i].level5+"</td><td>"+data[i].level6+"</td></tr>");
                                        }
                                    }
                              });


                    });
                     });    
                     $("#reset").click(function(){
                 window.location.reload();
            });