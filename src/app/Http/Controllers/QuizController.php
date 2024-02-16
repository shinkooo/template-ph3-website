<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('users.quizzes.index', compact('quizzes'));
    }

    public function detail(Quiz $quiz)
    {
        $quizWithQuestionsAndChoices = $quiz->load('questions.choices');
        return view('users.quizzes.detail', ['quiz' => $quizWithQuestionsAndChoices]);
    }
}