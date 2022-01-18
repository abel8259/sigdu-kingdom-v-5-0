
      
      var nomm = "nome do personagem";
      nomm = localStorage.getItem("char:");
      document.getElementById("nm-char").innerText = nomm;
      
  
      var nacc = localStorage.getItem(localStorage.getItem("char:")+']'+':'+'raça:');
      document.getElementById("rc-char").innerHTML = nacc;
  
      var clss = localStorage.getItem(localStorage.getItem("char:")+']'+':'+'classe:');
      document.getElementById("cl-char").innerHTML = clss;

      var pln = localStorage.getItem(localStorage.getItem("char:")+']'+':'+'plan:');
      document.getElementById("plano-char").innerHTML = pln;

      var org = localStorage.getItem(localStorage.getItem("char:")+']'+':'+'[ORG]:');
      document.getElementById("org-char").innerHTML = org;

      var ESF = localStorage.getItem(localStorage.getItem("char:")+']'+':'+'UF~_MP:');
      var cont_esf = parseInt(ESF)/50;  
      document.getElementById("esferas-char").innerHTML = cont_esf + "x O";






            var ATKU = localStorage.getItem(localStorage.getItem("char:")+']'+':'+'UF~_ATK:');
      document.getElementById("atkx").innerHTML = ATKU;


            var DEFU =localStorage.getItem(localStorage.getItem("char:")+']'+':'+'UF~_DEF:'); 
      document.getElementById("defx").innerHTML = DEFU;


            var PWU =localStorage.getItem(localStorage.getItem("char:")+']'+':'+'UF~_PW:');
      document.getElementById("pwx").innerHTML = PWU;

            var HPU = localStorage.getItem(localStorage.getItem("char:")+']'+':'+'UF~_HP:');
      document.getElementById("hpx").innerHTML = HPU;

            var MPU = localStorage.getItem(localStorage.getItem("char:")+']'+':'+'UF~_MP:');
      document.getElementById("mpx").innerHTML = MPU;

