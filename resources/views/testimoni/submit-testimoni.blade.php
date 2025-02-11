<div class="container my-5">
    <div class="card shadow p-4 border border-dark rounded-3" style="background-color: #CADFFE; border-color: #A0B3E3;">
        <div class="text-center">
            <h2 class="fw-bold text-dark">Submit Your Feedback</h2>
            <p class="text-muted" style="max-width: 800px; margin: auto;">
                Lorem ipsum dolor sit amet consectetur. Aliquet bibendum fringilla cras nisl 
                commodo sit facilisi massa euismod. Sit amet tristique nibh amet sociis mollis. 
                Ornare tellus et in montes. Et pharetra morbi vel mauris faucibus hendrerit 
                fermentum senectus. Ornare viverra elementum at aenean maecenas nunc egestas.
            </p>
        </div>

        <!-- Feedback Form -->
        <div class="mt-4">
            <form id="feedbackForm">
                @csrf
                <div class="d-flex">
                    <input type="text" id="feedbackInput" name="feedback" class="form-control rounded-start" 
                        placeholder="Type your feedback" style="border-radius: 8px 0 0 8px; border: none; padding: 12px;">
                    <button type="submit" class="btn text-white fw-bold" style="background-color: #4663F2; border-radius: 0 8px 8px 0; padding: 12px 24px;">
                        Submit
                    </button>
                </div>
                <div id="feedbackMessage" class="mt-2 text-success fw-bold"></div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById("feedbackForm").addEventListener("submit", function(event) {
        event.preventDefault();
        
        let feedbackInput = document.getElementById("feedbackInput").value;
        let feedbackMessage = document.getElementById("feedbackMessage");

        fetch("{{ route('testimoni.store') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
            },
            body: JSON.stringify({ feedback: feedbackInput })
        })
        .then(response => response.json())
        .then(data => {
            feedbackMessage.innerText = data.message;
            feedbackMessage.style.color = "green";
            document.getElementById("feedbackInput").value = "";
        })
        .catch(error => {
            feedbackMessage.innerText = "Error submitting feedback!";
            feedbackMessage.style.color = "red";
        });
    });
</script>