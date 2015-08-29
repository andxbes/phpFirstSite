<form method="post" action="/?route=account&param=in" name="singUp">
    <input type="text" name="login" placeholder="| Login" required /><br/>
    <input type="email" name="email" placeholder="| email" required /><br/>
    <input type="password" name="password" placeholder="| Пароль" required /><br/>
    <input type="password" name="r_password" placeholder="| Повторите пароль " required /><br/>
    <fieldset>
        <legend> Укажите свой пол </legend>
        Мужчина<input type="radio" name="gender" value="1" />
        <input type="radio" name="gender"  value="0"/> Женщина
    </fieldset>
    
    <input type="submit" name="submit" value=" Регистрация "  />
</form>
