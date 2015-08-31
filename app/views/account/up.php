<form method="POST" action="/?route=account&param=up" name="singUp">
    <input type="text" name="login" placeholder="| Login" required /><br/>
    <input type="text" name="name" placeholder="| Name" required /><br/>

    <fieldset>
        <legend> Укажите свой пол </legend>
        Мужчина<input type="radio" name="gender" value="1" />
        <input type="radio" name="gender"  value="0"/> Женщина
    </fieldset>
    
    <input type="email" name="email" placeholder="| email" required /><br/>
    <input type="password" name="password" placeholder="| Пароль" required /><br/>
    <input type="password" name="r_password" placeholder="| Повторите пароль " required /><br/>

    <input type="submit" name="submit" value=" Регистрация "  />
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
                //console.info(data.toString() + " / "  + textStatus + " / "+ jqXHR);
               if(data!=1){
                   $(element).css('background-color', 'green') ;
                   $(element).attr('title','OK');
               }else{
                    $(element).css('background-color', 'red') ;
                    $(element).attr('title','Такой пользователь уже зарегестрирован');
               }
            } ,
            error: function (jqXHR, textStatus, errorThrown) {
                 console.error(errorThrown + " / "  + textStatus + " / "+ jqXHR);
            }


        });
    });
</script>