---
title: Compress
categories: effects
body:
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - compress.png
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The Cherry Audio Compress module is a simple compressor effect with gain and reduction metering for controlling and/or shaping the dynamics of an audio signal. Compressors come in many styles and are used for various applications. This module has static attack and release times that are good for general dynamic control and/or creating punchier percussive sounds.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'For anyone unfamiliar, compressors lower the output level of a signal once its input level passes a threshold. This helps reduce the dynamic range of an audio signal. This module uses a simple approach to compression with only two controls. First set the amount of compression using the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Peak Reduction'
      -
        type: text
        text: ' control, then use the '
      -
        type: text
        marks:
          -
            type: italic
        text: Gain
      -
        type: text
        text: " knob to compensate for any decrease in perceivable volume.\_"
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
        text: 'Peak Reduction'
      -
        type: text
        text: "- As this knob is turned up from 0% to 100%, the amount of compression, or gain reduction, is increased. This is the equivalent of reducing the threshold on many compressors. The inverted VU meter shows the amount of gain reduction.\_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Gain
      -
        type: text
        text: '- This is a post-compression output-level control (often labeled "Make-Up Gain") that can be turned up to compensate for the decrease in volume caused by the compressor. The VU meter shows the level of the output signal.'
template: modules
blueprint: modules
meta_description: 'The Cherry Audio Compress module is a simple compressor effect with gain and reduction metering for controlling and/or shaping the dynamics of an audio signal.'
social_image: social-modules/compress.jpg
updated_at: 1593214820
updated_by: a0ce54e0-bf71-4d4c-a5b9-7182705c1bfa
id: 3d4701f9-7111-47cc-891b-0ad0b11299de
---
