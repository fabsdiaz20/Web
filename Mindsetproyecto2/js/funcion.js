document.addEventListener('DOMContentLoaded', function() {
    console.log("DOM fully loaded and parsed");
    document.getElementById('comment-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const message = document.getElementById('message').value;
        console.log("Form submitted with message:", message);

        if (message.trim() !== "") {
            const comment = {
                message,
                timestamp: new Date().toISOString()
            };
            console.log("Comment object created:", comment);
            addCommentToDOM(comment);
            document.getElementById('message').value = '';
        }
    });
});

function addCommentToDOM(comment) {
    const commentsSection = document.getElementById('comments');
    const commentElement = document.createElement('div');
    commentElement.classList.add('comment');
    commentElement.innerHTML = `
        <p>${comment.message}</p>
        <small>${new Date(comment.timestamp).toLocaleString()}</small>
    `;
    console.log("Adding comment to DOM:", commentElement);
    commentsSection.appendChild(commentElement);
}
