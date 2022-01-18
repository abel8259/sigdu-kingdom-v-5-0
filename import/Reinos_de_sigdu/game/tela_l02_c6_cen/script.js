 

var inventory = [ {"Numero": "400",
            "Nome": "Chave de Manutenção;",
            "ATK": "0",
            "DEF": "0",
            "GOLD": "0",
            "TIPO": "lock key;",
            "KIT": "itens de quest;",
            "Shop": "Item hunter",
            "Código1": "ITR",
            "Código2": "ITHHNT",
            "Código3": "00000038",
            "Código final": "ASLW&amp;ITHHNT00000038",
            "src_thumb":"../library/img/itens/item400-thumb.png",
            "src_desc":"../library/img/itens/item400-desc.png",
            "src_value":"../library/img/itens/item400-gold.png",
            "src_img":"../library/img/itens/item400-img.png"}]; 
function intro_bilhete_01(){
    inventory.push({"Numero": "401",
            "Nome": "Bilhete anon #1 ;",
            "ATK": "0",
            "DEF": "0",
            "GOLD": "0",
            "TIPO": "lock key;",
            "KIT": "itens de quest;",
            "Shop:": "Item hunter",
            "Código1": "ITR",
            "Código2": "ITHHNT",
            "Código3": "00000039",
            "Códigofinal ": "ASLW&amp;ITHHNT00000039",
            "src_thumb":"../library/img/itens/item401-thumb.png",
            "src_desc":"../library/img/itens/item401-desc.png",
            "src_value":"../library/img/itens/item401-gold.png",
            "src_img":"../library/img/itens/item401-img.png"
        });
    var inventory_input_str = JSON.stringify(inventory);
    localStorage.setItem("Inventory", inventory_input_str);  
};

var inventory_input_zero = JSON.stringify(inventory);
localStorage.setItem("Inventory", inventory_input_zero);  