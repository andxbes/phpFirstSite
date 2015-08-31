

<form method="post" action="#" name='in' >
    <input type="text" name="login" placeholder="| Login" required /><br/>
    <input type="password"  name="password" placeholder="| Пароль" required /><br/>
    <input type="submit" name="submit" value=" Вход "  />
</form>

<script>


     $('input[name="login"],input[name="email"]').bind('focusout', function () {
        var element = this;
        
        
        var dat = "chek=true"+"&"+ this.name + "=" + this.value ;
        //console.info(dat);

        $.ajax({
            type: 'POST',
            url: window.location.hostname + "/?route=account",
            data: dat,
            success: function (data, textStatus, jqXHR) {
                   console.info(data.toString() + " / "  + textStatus + " / "+ jqXHR);
              if(data==1){
                   $(element).css('background-color', 'green') ;
                   $(element).attr('title','OK');
               }else{
                    $(element).css('background-color', 'red') ;
                    $(element).attr('title','Такого пользователя нет');
               }
            } ,
            error: function (jqXHR, textStatus, errorThrown) {
                 console.error(errorThrown + " / "  + textStatus + " / "+ jqXHR);
            }


        });
    });

</script>
