$(document).ready(function(){
        $("#contents img").eq(0).attr("src",$("#data img").eq(0).attr("src"));
        $("#contents img").eq(1).attr("src",$("#data img").eq(1).attr("src"));
        $("#contents img").eq(2).attr("src",$("#data img").eq(2).attr("src"));
        var i=0;
        var j=1;
        var k=2;
        $("#next").click(function(){
            
            var len=$("#data img").length-1;
            if(i>=len)
                {
                    i=0;
                    j=1;
                    k=2;
                }
            else if(j>=len)
                {
                    i=0;
                    j=1;
                    k=2;
                }
            else if(k>=len)
                {
                    i=0;
                    j=1;
                    k=2;
                }
            else{
                i++;
                j++;
                k++;
                
                
                
                
            }
            
            var src=$("#data img").attr("src");
            $("#contents img").eq(0).attr("src",$("#data img").eq(i).attr("src"));
            
            $("#contents img").eq(1).attr("src",$("#data img").eq(j).attr("src"));
            $("#contents img").eq(2).attr("src",$("#data img").eq(k).attr("src"));
            
        });
        
        
        $("#prev").click(function(){
            
            var len=$("#data img").length-1;
            if(i==0)
               {
                    i=len;
                    j=len-1;
                    k=len-2;
                }
            else if(k==0)
                {
                    i=0;
                    j=1;
                    k=2;
                }
            
            else{
                i--;
                j--;
                k--;
            }
            
            var src=$("#data img").eq(i).attr("src");
            $("#contents img").eq(0).attr("src",$("#data img").eq(i).attr("src"));
            
            $("#contents img").eq(1).attr("src",$("#data img").eq(j).attr("src"));
            $("#contents img").eq(2).attr("src",$("#data img").eq(k).attr("src"));
            
        });
        
    });