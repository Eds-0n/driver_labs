document.addEventListener('DOMContentLoaded', () => {
    
    const menu_items = document.querySelectorAll('.dashboard_menu_links input[type=radio]');
    
    const content_boxes = document.querySelectorAll('.dashboard_main_content_box');
    
    menu_items.forEach(item => {
        if (item.id == 'principal') {
            
            item.setAttribute('checked', '');
            
        }
    })
    
    content_boxes.forEach(content_box => {
        
        content_box.classList.add('hide');
        
    });
    
    document.querySelector('.planos').classList.remove('hide');
    
    menu_items.forEach(menu_item => {
        
        menu_item.addEventListener('click', () => {
            
            if (menu_item.id == 'cursos' || menu_item.id == 'autenticacao') {
                
                // Permanece no elemento clicado anteriorimente
                
            } else {
                
                content_boxes.forEach(content_box => {
                    
                    content_box.classList.add('hide');
                    
                });
                
                document.querySelector(`.${menu_item.id}`).classList.remove('hide');
                
            }
            
        });
        
    });
    
    // ////////////////////////////////////////////
    //              MENU DO MEUS CURSOS
    // ////////////////////////////////////////////
    
    let meus_cursos_menu_items = document.querySelectorAll('input[name=meus_cursos_menu]');
    
    let meus_cursos_menu_boxes = document.querySelectorAll('.dashboard_main_content_meus_cursos_box');
    
    meus_cursos_menu_items.forEach(meus_cursos_menu_item => {
        
        if (meus_cursos_menu_item.id == 'em_curso') {
            
            meus_cursos_menu_item.setAttribute('checked', '');
            
        }
        
    });
    
    meus_cursos_menu_boxes.forEach(meus_cursos_menu_box => {
        meus_cursos_menu_box.classList.add('hide');
    });
    
    function find_meus_cursos_menu_item_checked () {
        
        let meus_cursos_menu_item_checked;
        
        meus_cursos_menu_items.forEach(meus_cursos_menu_item => {
            
            if (meus_cursos_menu_item.checked) {
                meus_cursos_menu_item_checked = meus_cursos_menu_item.id;
            }
            
        });
        
        return meus_cursos_menu_item_checked;
        
    }
    
    document.querySelector(`.${find_meus_cursos_menu_item_checked()}`).classList.remove('hide');
    
    meus_cursos_menu_items.forEach(meus_cursos_menu_item => {
        
        let meus_cursos_menu_item_checked;
        
        meus_cursos_menu_item.addEventListener('click', () => {
            
            meus_cursos_menu_item_checked = find_meus_cursos_menu_item_checked();
            
            meus_cursos_menu_boxes.forEach(meus_cursos_menu_box => {
                meus_cursos_menu_box.classList.add('hide');
            });
            
            document.querySelector(`.${meus_cursos_menu_item_checked}`).classList.remove('hide');
            
        });
        
    })
    
    // ////////////////////////////////////////////
    //              MMENU DE MENSAGENS
    // ////////////////////////////////////////////
    
    let mensagens_users_id = document.querySelectorAll('input[name=user]');
    
    let mensagens_users_id_boxes = document.querySelectorAll('.message_chat_box');
    
    document.querySelector('#john_doe').setAttribute('checked', '');
    
    mensagens_users_id_boxes.forEach(mensagens_user_id_box => {
        mensagens_user_id_box.classList.add('hide');
    });
    
    document.querySelector('.john_doe').classList.remove('hide');
    
    mensagens_users_id.forEach(mensagens_user_id => {
        
        mensagens_user_id.addEventListener('click', () => {
            
            mensagens_users_id_boxes.forEach(mensagens_user_id_box => {
                
                mensagens_user_id_box.classList.add('hide');
                
            })
            
            document.querySelector(`.${mensagens_user_id.id}`).classList.remove('hide');
            
        })
        
    });
    
    
    // ////////////////////////////////////////////////////////////////
    //              MMENU DE MENSAGENS : FICHEIROS CARREGADS
    // ////////////////////////////////////////////////////////////////
    
    // document.querySelector('.message_chat_content_uploaded_files').classList.add('hide');
    
    // document.getElementById('ficheiros').addEventListener('change', function(event) {
        
    //     document.querySelector('.message_chat_content_uploaded_files').classList.remove('hide');
        
    //     files = document.getElementById('ficheiros').value;
    //     console.log(files);
        
    //     files.forEach(file => {
    //         document.querySelector('.message_chat_content_uploaded_files').innerHTML = `${file} <br>`;

    //     });
    // });


    
    
});