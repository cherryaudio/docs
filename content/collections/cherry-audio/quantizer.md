---
title: Quantizer
body:
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - quantizer.png
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The Cherry Audio Quantizer module is designed to conform a control voltage input signal to a specific key and scale, or a user-defined set of notes. There are 29 preset scales available and custom scales can easily be created by manually toggling individual notes on or off using the virtual "keyboard." Pitches are tracked and quantized according to the standard 1V/octave scaling.'
  -
    type: heading
    attrs:
      level: '2'
    content:
      -
        type: text
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
        text: '- Input for the CV to be scale quantized. Typically this will originate from the CV output of a module such as the Arpeggiator, Eight Step Sequencer, or I/O Panel *Pitch CV Out*.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Scale Select'
      -
        type: text
        text: '- Opens a menu to select one of the 29 preset scales.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Key
      -
        type: text
        text: '- Sets the root note or tonic of the scale.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Keyboard Octave'
      -
        type: text
        text: '- These 12 black and white keys represent each note of an octave in a standard piano keyboard arrangement. The notes included in the selected scale are illuminated in red and can be toggled on and off to create custom scales by clicking on the buttons.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'In Offset'
      -
        type: text
        text: '- Offsets the input signal’s voltage up or down in semitone increments by up to two octaves.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'In Offset CV Mod jack'
      -
        type: text
        text: '- Input jack for externally controlling the voltage offset of the input signal. Patching *Pitch CV Out* from the I/O panel allows pitch transposition of the input signal in semitones via a keyboard or other CV source.'
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
        text: '- Outputs the input signal after being forced to the specified key and scale.'
template: modules
seo:
  description: 'The Cherry Audio Quantizer module is designed to conform a control voltage input signal to a specific key and scale, or a user-defined set of notes.'
  image: /assets/social-modules/quantizer.png
slug: quantizer
blueprint: modules
categories: cv-processors
updated_at: 1593214581
updated_by: a0ce54e0-bf71-4d4c-a5b9-7182705c1bfa
id: 38cea3b1-2b9f-4219-8789-32ec56f6e2f0
---
