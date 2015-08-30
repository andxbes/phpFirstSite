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
