@extends('includes.page_layout')

@php
    $active_nav = 'Dashboard';
    $page_title = [1, 'Dashboard'];
@endphp

@section('content')

<style>
    .container {
        margin: 0 auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #2c3e50;
        font-size: 28px;
        margin-bottom: 20px;
    }

    .questions-wrapper {
        display: flex;
        justify-content: space-between;
    }

    .questions-column {
        width: 48%;
    }

    .question {
        margin-bottom: 15px;
        transition: background-color 0.3s;
    }

    .answer {
        display: block;
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
        transition: border-color 0.3s;
    }

    .answer:focus {
        border-color: #007bff;
        outline: none;
    }

    .submit-btn, .change-btn {
        display: block;
        width: 48%;
        padding: 12px;
        margin: 10px auto;
        font-size: 16px;
        color: white;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-btn:hover, .change-btn:hover {
        background-color: #0056b3;
    }

    .result {
        margin-top: 20px;
        text-align: center;
        font-size: 1.4em;
        color: green;
        transition: color 0.3s;
    }

    .incorrect {
        border-color: red !important;
        background-color: #ffcccc;
    }
</style>

<div class="container">
    <h1>Math Quiz: Addition & Subtraction</h1>
    <form id="quizForm" role="form">
        <div class="questions-wrapper">
            <div id="leftColumn" class="questions-column"></div>
            <div id="rightColumn" class="questions-column"></div>
        </div>
        <button type="submit" class="submit-btn">Submit</button>
        <button type="button" class="change-btn">Change Questions</button>
    </form>
    <div id="result" class="result"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        const totalQuestions = 20;
        const questionsPerColumn = totalQuestions / 2;

        function generateQuestions() {
            $('#leftColumn').empty(); // Clear existing questions
            $('#rightColumn').empty();

            for (let i = 0; i < totalQuestions; i++) {
                const num1 = Math.floor(Math.random() * 20) + 2; // Ensure num1 >= 2
                const num2 = Math.floor(Math.random() * (num1 - 1)) + 1; // Ensure num2 < num1
                const isAddition = Math.random() > 0.5;
                const questionText = isAddition
                    ? `${num1} + ${num2} = `
                    : `${num1} - ${num2} = `;
                const answer = isAddition ? num1 + num2 : num1 - num2;

                // Create question element
                const $questionDiv = $(`
                    <div class="question">
                        <label>${i + 1}) ${questionText}</label>
                        <input type="number" class="answer" data-answer="${answer}" aria-label="Question ${i + 1}" required>
                    </div>
                `);

                // Append to the appropriate column
                if (i < questionsPerColumn) {
                    $('#leftColumn').append($questionDiv);
                } else {
                    $('#rightColumn').append($questionDiv);
                }
            }
        }

        // Check answers and show results
        $('#quizForm').on('submit', function (e) {
            e.preventDefault();
            let score = 0;

            $('.answer').each(function () {
                const userAnswer = parseInt($(this).val());
                const correctAnswer = parseInt($(this).data('answer'));

                if (userAnswer === correctAnswer) {
                    score++;
                    $(this).removeClass('incorrect');
                } else {
                    $(this).addClass('incorrect');
                }
            });

            $('#result').text(`You scored ${score} out of ${totalQuestions}!`);
        });

        // Change Questions Button
        $('.change-btn').on('click', function () {
            generateQuestions();
            $('#result').text(''); // Clear result
        });

        generateQuestions();
    });
</script>
@endsection
