<?php

namespace App\Enums;

enum QuestionTypeEnum: string{
    case Text = 'Text';
    case Textarea = 'Textarea';
    case Select = 'select';
    case Radio = 'radio';
    case Checkbox = 'checkbox';
}