document.getElementById('discordForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const message = document.getElementById('message').value;

    const webhookURL ='https://discord.com/api/webhooks/1157258379698376758/GgWRg_aN1PRPvo67fN0xZ_dS0AtRL4QAPkqZs8mQO7gn8hEOVM-PuFTDQkmR-MdttspB'; 

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
            document.getElementById('discordForm').reset(); // Reset the form
        } else {
            alert('Error sending message to Discord.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error sending message to Discord.');
    });
});
