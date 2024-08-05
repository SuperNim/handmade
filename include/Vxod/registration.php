<form action="/scripts/register.php" method="post">
    <div class="name_shop name_vxod">
        My account
    </div>
    <div class="Vxod">
        <div class="menu_vxod">
            <div class="login_v_vxod dop_sdvig">
                REGISTER
            </div>
            <div class="Username dop_sdvig_dva">
                Email address
            </div>
            <div class="Krasnay_star">
                *
            </div>
            <div class="stroka_login">
                <input type="text" name="email">
            </div>
            <div class="Username sdvig_v_levo">
                Password
            </div>
            <div class="Krasnay_star">
                *
            </div>
            <div class="stroka_login">
                <div class="password">
                    <input type="password" id="password-input" placeholder="" name="password">
                    <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                </div>
            </div>
            <button type="submit" class="knopka_vxod">
                    REGISTER
            </button>
        </div>
    </div>
</form>
<script>
    function show_hide_password(target){
        var input = document.getElementById('password-input');
        if (input.getAttribute('type') == 'password') {
            target.classList.add('view');
            input.setAttribute('type', 'text');
        } else {
            target.classList.remove('view');
            input.setAttribute('type', 'password');
        }
        return false;
    }
</script>


