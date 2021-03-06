---
title: Limiter
body:
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - limiter.png
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: "The Cherry Audio Limiter module is an extreme \"brickwall\" style limiter for audio signals. Limiters can be used subtly to \"catch\" the loudest peaks of a signal to keep it from clipping or quite aggressively to \"smash\" a signal’s dynamics. They are famously known for their use in the mastering process to increase the overall level of a song while also making it sound punchier and \"larger than life.\"\_"
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Inputs, Outputs, and Controls'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Input jack'
      -
        type: text
        text: '- Patch audio signals here.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Reduction
      -
        type: text
        text: "- Increases the amount of gain reduction. On many limiters, this knob is referred to as \"Gain\" or \"Input Gain.\" Turning the knob up increases the level of the input signal being sent to the limiter’s level detector. The louder the signal is, the more \"Reduction\" is needed to keep the signal from exceeding 0dB.\_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'VU Meter (Red./Out)'
      -
        type: text
        text: '- This VU meter can be set to display the limiter’s amount of gain reduction ('
      -
        type: text
        marks:
          -
            type: italic
        text: Red.
      -
        type: text
        text: ') or its output level ('
      -
        type: text
        marks:
          -
            type: italic
        text: Out
      -
        type: text
        text: ).
      -
        type: text
        marks:
          -
            type: bold
        text: "\_"
      -
        type: text
        text: 'When '
      -
        type: text
        marks:
          -
            type: italic
        text: Red.
      -
        type: text
        text: ' is selected, the meter’s needle will remain still at 0VU until the input signal exceeds 0db at which point it moves left to display how much the signal is being reduced to keep it from crossing 0dB. When '
      -
        type: text
        marks:
          -
            type: italic
        text: Out
      -
        type: text
        text: ' is selected, the meter behaves as a typical VU meter displaying the level of the output signal.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Makeup Gain'
      -
        type: text
        text: "- This increases the volume of the output signal to \"make up\" for the amount of gain reduction imparted by the limiter.\_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Output jack'
      -
        type: text
        text: '- Outputs the limited audio signal.'
template: modules
seo:
  description: 'The Cherry Audio Limiter module is an extreme “brickwall” style limiter for audio signals.'
  image: /assets/social-modules/limiter.png
slug: limiter
blueprint: modules
categories: effects
updated_at: 1593214773
updated_by: a0ce54e0-bf71-4d4c-a5b9-7182705c1bfa
id: 55b41ea5-531f-487b-8e3e-920eac011d06
---
