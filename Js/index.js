document.getElementById('discordForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const message = document.getElementById('message').value;

    const webhookURL ='https://discord.com/api/webhooks/1157200915766456351/YDfWKVva9WcxLIUSROnoirbyRoFfdqwhWztwNH1yDVDGKXUodv0ywO0sYW5L2jbVPtE5'; 

    const data = {
        content: message,
        username: username
    };

    fetch(webhookURL, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (response.ok) {
            alert('Message sent to Discord successfully!');
        } else {
            alert('Error sending message to Discord.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error sending message to Discord.');
    });
});