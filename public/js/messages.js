// const csrfTokenn = csrfToken;
let lastMessageTimestamp = "1990-12-12 12:12:12";
let lastConversationTimestamp = "1990-12-12 12:12:12";

document.addEventListener('DOMContentLoaded', function() {
    // outer container it messages
    const messageOuterContainer = document.getElementById('messageOuterContainer');

    // outercontainer list para an mga convo
    const conversationList = document.getElementById('conversationList');
    
    // get conversations function
    function getConversations() {
        
        const xhttp = new XMLHttpRequest();

        xhttp.open('GET', `/getConversations?lastConversationTimestamp=${lastConversationTimestamp}&current_username=${current_username}`, true);
        xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                const responses = JSON.parse(this.responseText);

                // checker if may sulod
                if (responses.data.length > 0) {
                    lastConversationTimestamp = responses.data[responses.data.length - 1].created_at;
                    //console.log(responses.data);
                    showConversations(responses.data);
                } else {
                    //console.log('waray pa conversations');
                }
            }
        }

        xhttp.send();
    }
    
    //getConversations();
    setInterval(getConversations, 1200);

    // show conversations
    function showConversations(responses) {
        responses.forEach(response => {
            const conversationCtn = document.createElement('div');
            conversationCtn.textContent = response.conversation_name;
            conversationCtn.id = 'conversationCtn';
            conversationCtn.classList.add('conversationCtn');

            conversationList.appendChild(conversationCtn);
            
            
            // add event listener
            conversationCtn.addEventListener('click', function() {
                messageOuterContainer.innerHTML = "";
                document.getElementById('receiverName').textContent = response.conversation_name;
                
                const xhttp = new XMLHttpRequest();
                
                lastMessageTimestamp = '1990-12-12 12:12:12';

                function getMessages() {
                    // conversation name
                    const conversation_name = response.conversation_name;
                    xhttp.open('GET', `/getMessage?lastMessageTimestamp=${lastMessageTimestamp}&conversationName=${conversation_name}`, true);
                    xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    
                    xhttp.onreadystatechange = function() {
                        if (this.readyState === 4 && this.status === 200) {
                            const responses = JSON.parse(this.responseText);
                             
                            if (responses) {
                                try {
                                    lastMessageTimestamp = responses.data[responses.data.length - 1].created_at;
                                    showMessages(responses.data);
                                    console.log(responses);
                                    console.log(response.conversation_name);
                                } catch {
                                    //console.log("waray bago na message");
                                }
                            }
                        }
                    }
    
                    xhttp.send();
                }

                getMessages();
                //setInterval(getMessages, 1500);

                document.getElementById('sendMessageButton').addEventListener('click', function() {
                    const message_content = document.getElementById('messageInputContainer').value;

                    // conversation name
                    const conversation_name = response.conversation_name;
                    console.log(conversation_name);
    
                    // pag send message
                    const xhttp1 = new XMLHttpRequest();
                            
                    xhttp1.open('POST', '/sendMessageTwo', true);
                    xhttp1.setRequestHeader('Content-Type', 'application/json');
                    xhttp1.setRequestHeader('X-CSRF-TOKEN', csrfToken);
                
                    xhttp1.onreadystatechange = function() {
                        if (this.readyState === 4 && this.status === 200) {
                            const response = JSON.parse(this.responseText);
                            console.log(response.message);
                            document.getElementById('messageForm').reset();
                        } else {
                            console.log('failed an pag request');
                        }
                    } 
                
                    const data = JSON.stringify({
                        current_username: current_username,
                        sender_id: current_user_id,
                        message_content: message_content,
                        conversation_name: conversation_name,
                        conversation_id: response.conversation_id
                    });
                    
                    xhttp1.send(data);
                });    

            });
            
            // try pag pa work it pag delete gamit pag hold it container itself
            // conversationCtn.addEventListener('touchstart', function() {
            //     setTimeout(function() {
            //         const xhttp = new XMLHttpRequest();
            //         xhttp.open('DELETE', `/deleteConversation?conversation_id=${response.conversation_id}`, true);
            //         xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            //         xhttp.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            //         xhttp.onreadystatechange = function() {
            //             if (this.readyState === 4 && this.status === 200) {
            //                 const responses = JSON.parse(this.responseText);

            //                 if (responses) {
            //                     console.log(responses);
            //                 }
            //             }
            //         }
            //         console.log('na hold for 1.5sec');
            //         xhttp.send();
            //     }, 1500);
            // });

            // conversationCtn.addEventListener('touchend', function() {
            //     // clearTimeout(timeout);
            //     console.log('touch ended');            
            // });

        });
    }
    
    // show messages ha search na approach
    function showMessages(responses) {
        responses.forEach(response => {
            const messageCtn = document.createElement('div');
            messageCtn.textContent = response.message_content;
            messageCtn.id = "messageCtn";

            if (response.sender_id == current_user_id) {
                messageCtn.classList.add('messageRight');
            } else {
                messageCtn.classList.add('messageLeft');
            }

            messageOuterContainer.appendChild(messageCtn);
            messageOuterContainer.scrollTop = messageOuterContainer.scrollHeight;
        });
    }
    
    // search function
    function searchUser(username) {
        const searchResult = document.getElementById('searchResult');
        searchResult.innerHTML = "";
        const searchOuterCtn = document.getElementById('searchOuterContainer');

        const xhttp = new XMLHttpRequest();
        
        xhttp.open('GET', `/searchUser?username=${username}`, true);
        xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                const responses = JSON.parse(this.responseText);

                const jsonArr = Object.values(responses);
                console.log(Object.values(responses));
                
                if (jsonArr.length > 0) {
                    jsonArr.forEach(instance => {
                        console.log(instance);
                    });
                    
                    searchResult.textContent = jsonArr[0].username;
                    
                    searchOuterCtn.appendChild(searchResult);
                    searchResult.addEventListener('click', function() {
                        //console.log(jsonArr);
                        searchResult.textContent = null;
                        
                        document.getElementById('searchInputContainer').value = "";

                        document.getElementById('receiverName').textContent = jsonArr[0].first_name;

                        // messaga timestamp
                        lastMessageTimestamp = '1990-12-12 12:12:12';                        
                        
                        // pag kuha messages ha db based ha conversation id
                        function getMessages() {    
                            const receiver_username = jsonArr[0].username;

                            // conversation name para mayda niya reference hain it kuha.on
                            const convoName = current_username + "," + receiver_username;
                            console.log(convoName);
                                                    
                            const xhttp = new XMLHttpRequest();
                            
                            xhttp.open('GET', `/getMessage?lastMessageTimestamp=${lastMessageTimestamp}&conversationName=${convoName}`, true);
                            xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                            
                            xhttp.onreadystatechange = function() {
                                if (this.readyState === 4 && this.status === 200) {
                                    
                                    const responses = JSON.parse(this.responseText);
                                    if (Object.keys(responses).length > 0) {
                                        try {
                                            lastMessageTimestamp = responses.data[responses.data.length - 1].created_at;
                                            console.log(lastMessageTimestamp);
                                        } catch {
                                            //console.log("waray bago na message");
                                        }
                                        //console.log(responses);
                                        showMessages(responses.data);                
                                    } else {
                                        console.log('Nothing inside result set');
                                    }
                                }
                            }
                            
                            xhttp.send();
                        };

                        // tawag an getMessages once maka click nat user ha search result
                        setInterval(getMessages, 1500); 
                        //getMessages();

                        // text area ha form
                        document.getElementById('sendMessageButton').addEventListener('click', function() {
                            const messageValue = document.getElementById('messageInputContainer').value;
                            
                            // creation of conversation container
                            const xhttp1 = new XMLHttpRequest();
                            
                            // conversation name
                            const conversation_name = current_username + "," + jsonArr[0].username; 
                            
                            xhttp1.open('POST', '/conversations', true);
                            xhttp1.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                            xhttp1.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    
                            xhttp1.onreadystatechange = function() {
                                if (this.readyState === 4 && this.status === 200) {
                                    const responses = JSON.parse(this.responseText);
                                    console.log(responses);
                                } else {
                                    console.log('Post denied' + 'message');
                                }
                            }
    
                            const conversation_data = JSON.stringify({
                                conversation_name: conversation_name 
                            });
                        
                            xhttp1.send(conversation_data);
                            
                            // pag send message
                            const xhttp = new XMLHttpRequest();
                        
                            xhttp.open('POST', '/sendMessage', true);
                            xhttp.setRequestHeader('Content-Type', 'application/json');
                            xhttp.setRequestHeader('X-CSRF-TOKEN', csrfToken);
                        
                            xhttp.onreadystatechange = function() {
                                if (this.readyState === 4 && this.status === 200) {
                                    const response = JSON.parse(this.responseText);
                                    console.log(response.message);
                                    document.getElementById('messageForm').reset();
                                } else {
                                    console.log('failed an pag request');
                                }
                            } 
                        
                            const data = JSON.stringify({
                                sender_id: current_user_id,
                                receiver_id: responses.data['id'],
                                message_content: messageValue,
                                conversation_name: conversation_name
                            });
                            
                            xhttp.send(data);
                        });                        
                    });
                
                } else {
                    console.log('username does not exist');
                }
            }
        }

        xhttp.send();
    }

    // search input container
    document.getElementById('searchButton').addEventListener('click', function() {
        const username = document.getElementById('searchInputContainer').value;

        console.log('search input container data sent to search function');
        searchUser(username);
    });

});
