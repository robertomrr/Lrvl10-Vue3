<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="ouvidoria" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Ouvidora Ipem-SP</h2>
        </template>

        <div class="topnav" id="myTopnav">

            <a href="#news" class="active">___ Menu Ouvidoria ___</a>
            <div class="dropdown">
                <button class="dropbtn">Serviços<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">S.A.C.</a>
                    <a href="#">Departamentos</a>
                    <a href="#">Divisões</a>
                    <a href="#">Regionais</a>
                    <a href="#">Fiscais</a>>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Operação<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Controle de Movimentação</a>
                    <a href="#">Controle de Prazos</a>
                    <a href="#">Consulta das Denuncias</a>
                    <a href="#">Manutenção Modelo-Pesquisas</a>
                    <a href="#">Consulta das Pesquisas de Satisfação</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Contato<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">E-mail (Pesquisa de Satisfação)</a>
                    <a href="#">Lista de Denunciados</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Utilitários<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Alterar Senha</a>
                    <a href="#">Transferir Demanda</a>
                    <a href="#">Pesquisa de Satisfação</a>
                    <a href="#">Manutenção de Domínios</a>
                    <a href="#">Manutenção de Parâmetros</a>
                    <a href="#">Manutenção Servidor SMTP</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Cadastro Básico<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Área Metrológica</a>
                    <a href="#">Seguimento Metrológico</a>
                    <a href="#">Categoria do Seguimento</a>
                    <a href="#">Itens da Categoria</a>
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
            <h2>Menu Serviços da acesso aos serviços de atendimento e averiguação da denuncia feita pelo cliente.</h2>
            <h2>Menu Operação refere-se aos procedimentos administrativas de controle e manutenção das denuncias.</h2>
            <h2>Menu Contato da acesso aos denunciantes via e-mail</h2>
            <h2>Menu Utilitários da acesso a programas de apoio à manutenção do sistema Ouvidoria</h2>
            <h2>Menu Cadastro Básico da acesso a programas que mantem informações necessárias ao sistema Ouvidoria.</h2>
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
