
$(document).ready(function(){
    //Ajex call form already Exists Email Verification
    $("#stuemail").on("keypress blur",function(){
        var reg=/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

        var stuemail=$("#stuemail").val();
$.ajax({
    url:'Student/addstudent.php',
    method:'POST',
    data:{
        checkemail:"checkmail",
        stuemail:stuemail,
    },
    success:function(data){
       // console.log(data)
    if(data !=0){
       $("#statusMsg2").html(
        '<small style="colour:red;">email id already use!</small>'
        );  
        $("#sigup").attr("disabled",true);  
                }else if(data == 0 ,reg.test(stuemail)){
                    $("#statusMsg2").html(
                        '<small style="colour:green;">There You Go!</small>'
                        );  
                        $("#sigup").attr("disabled",false);  
                    }else if(!reg.test(stuemail)){
                        $("#statusMsg2").html(
                            '<small style="colour:green;">Please Enter vaild Email e.g.exampl@gail.com!</small>'
                            );  
                            $("#sigup").attr("disabled",false);   
                    }
                    if(stuemail==""){
                        $("#statusMsg2").html(
                            '<small style="colour:red;">Please enter email!</small>'
                            );  
                }
    
},
});
    
function addStu(){
    var stuname=$("#stuname").val()
    var stuemail=$("#stuemail").val()
    var stupass=$("#stupass").val()
//Checking form fields on form submittion
if(stuname.trim()==""){
    $("#statusMsg1").html(
        '<small style="colour:red;">Please Enter Name!</small>');
        $("#stuname").focus();
        return false;
}else if  (stuemail.trim()=="") {
    $("#statusMsg2").html(
        '<small style="colour:red;">Please Enter email!</small>'
        );
        $("#stuemail").focus();
        return false;
    }else if(stuemail.trim()!=""&& !reg.test(stuemail)){
    $("#statusMsg2").html(
        '<small style="colour:red;">Please Enter vaild Email e.g.exampl@gail.com!</small>'
        );
        $("#stuemail").focus();
        return false;
    } else if (stupass.trim()==""){
        $("#statusMsg3").html(
            '<small style="colour:red;">Please Enter password!</small>'
            );
            $("#stupass").focus();
            return false;
        }else{
            $:ajax({
                url:'Student/addstudent.php',
                method:'POST',
                dataType:"json",
                data: {
                    stusignup:"stusignup",
                    stuname:stuname,
                    stuemail:stuemail,
                    stupass:stupass,
                
                },
                success:function(data){
                    console.log(data)
                    if(data=="OK"){
                        $('#successMsg').html("<span class='alert alert-success'>Registration Successful !</span>");
                         clearStuRegField();
                    }
                    
                    else if(data=="Failed"){
                            $('#successMsg').html("<span class='alert alert-danger'>Unable to Register </span>");
                    }
                
                },
            }),

        
    ////Empty All Fieled
    function clearStuRegField(){
        $("#stuRegForm").trigger("reset");
      $("#statusMeg1").html(" ");
       $("#statusMeg2").html(" ");
      $("#statusMeg3").html(" ");
    }