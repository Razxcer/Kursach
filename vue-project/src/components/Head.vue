<script setup>

</script>

<template>
    <div class="head">

        <a href="./index.html" class="logo-link">
            <div class="logo">XZ</div>
        </a>

        <input type="text" name="search" id="search" class="search" placeholder="Поиск"/>

        <div class="head-icon dropdown-icon favorites">
                <button class="head-button dropdown-button favorites-button" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                    </svg>
                    <p>Избранное</p>
                </button>
            
                <div class="dropdown-content">
                    <a href="#">Что-то</a>  
                    <a href="#">Что-то</a>  
                    <a href="#">Работает?</a>  
                    <a href="#">Что-то</a>  
                    <a href="#">Что-то</a>
                </div>
            </div>

            <div class="head-icon dropdown-icon basket">
                <button class="head-button dropdown-button" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                    <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1"/>
                    </svg>
                    <p>Корзина</p>
                </button>
            
                <div class="dropdown-content">
                    <a href="#">Чтото</a>  
                    <a href="#">Чтото</a>  
                    <a href="#">Чтото</a>  
                    <a href="#">Чтото</a>  
                    <a href="#">Чтото</a>
                </div>
            </div>

            <div class="head-icon dropdown-icon profile">
                <a href="">                                              
                <button class="head-button dropdown-button" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    <p>Войти</p>
                </button>
                </a>
            
                <div class="dropdown-content">
                    <a href="#">Аккаунт</a>  
                    <a href="#">Покупки</a>  
                    <a href="#">Настройки</a>  
                    <a href="#">Выйти</a>
                </div>
            </div>



    </div>

</template>

<style scoped>

.head{
    position: fixed;
    width: 100%;
    height: 60px;
    background-color: var(--color-background-soft);
    display: flex;
    justify-content: center;
    top: 0;
    left: 0;
    box-shadow: 0px 0px 5px 5px var(--color-background);
    z-index: 999;
}

.logo-link{
    height: 100%;
    display: flex;
    width: 350px; 
    justify-self:left;
    justify-content: center;
    margin-right: 30px;

}

.logo{
    align-self: center;
    text-align:  center;
    height: 90%;
    font-weight: bold;
    font-size: 50px;
    text-align: center;
    line-height: 1;
    color: var(--color-text);
}

.search{
    width: 800px;
    height: 70%;
    border-radius: 1.5em;
    border: none;
    align-self: center;
    background-color: var(--color-text);
    font-size: 26px;
    text-indent: 15px;
    opacity: 0.9;
}

.search:focus{
    box-shadow: 0px 0px 3px 2px var(--color-text);
    outline: none;
}

.head-icon{
    width: 60px;
    height: 60px;
    margin-left: 30px;
}

.head-icon>a{
    border-radius: 1em;
}

.dropdown-icon{
    display: flex;
    flex-direction: column;
}


.head-button{
    width: 60px;
    height: 60px;
    margin: 0 auto;
    background-color: var(--color-background-soft);
    color: var(--color-text);
    border-style: none;
    opacity: 0.8;
}

.head-button>svg{
    width: 30px;
    height: 30px;
}

.head-button>p{
    text-align: center;
    font-size: 12px;
}

.dropdown-content{
    display: none;
    margin-top: 60px;
    flex-direction: column;
    position: absolute;
    background-color: var(--color-background-soft);
    padding: 2px 10px;
    /* box-shadow: 0px 0px 0px 0px var(--second-color); */
    z-index: 1;
    border-radius: 1em;
}

.dropdown-icon:hover .dropdown-content{
    display: flex;
}

.dropdown-content>a{
    color: var(--color-text);
    font-size: 16px;
    border-radius: 10%;
}


/* @media (min-width: 1024px) {
} */
</style>
