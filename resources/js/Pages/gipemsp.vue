<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="home" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">GIpem-SP</h2>
        </template>

        <div class="topnav" id="myTopnav">

            <a href="#news" class="active">___ Menu GIpem-SP ___</a>
            <div class="dropdown">
                <button class="dropbtn">Serviços<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Coleta</a>
                    <a href="#">Avaliação</a>
                    <a href="#">Certificação</a>
                    <a href="#">Verificação</a>
                    <a href="#">Fiscalização</a>
                    <a href="#">Calibração</a>
                    <a href="#">Laboratório</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Operação<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">DADM</a>
                    <a href="#">DOFC</a>
                    <a href="#">DRHU</a>
                    <a href="#">DTIN</a>
                    <a href="#">DAGP</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Superintendência<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">AGQ</a>
                    <a href="#">OUV</a>
                    <a href="#">APL</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Utilitários<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Utilitários para Serviços</a>
                    <a href="#">Utilitários Operacionais</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Cadastro Básico<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Ambiente</a>
                    <a href="#">Executor</a>
                    <a href="#">Equipamento</a>
                    <a href="#">Procedimento</a>
                    <a href="#">Produto</a>
                </div>
            </div>
            <a href="#about">About</a>
            <!-- <a href="/login">Login</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a> -->

            <Link
                :href="route('logout')" method="post"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Log Out</Link>
        </div>


        <div style="padding-left:16px">
            <h2>Menu Serviços da acesso aos serviços prestados pelo IPEM.</h2>
            <h2>Menu Operação da acesso aos departamentos/Divisões administrativas do IPEM.</h2>
            <h2>Menu Superintendência da acesso aos departamentos de suporte a administração IPEM-SP</h2>
            <h2>Menu Utilitários da acesso a programas de apoio aos serviços e operações dos departamentos IPEM-SP</h2>
            <h2>Menu Cadastro Básico da acesso a programas que mantem informações necessárias ao sistema de Gestão IPEM de São Paulo</h2>
        </div>

    </AuthenticatedLayout>
</template>

<script>
    export default{
        props:{
            title: String
        }
}

export function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>

<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
