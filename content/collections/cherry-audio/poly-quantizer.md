---
title: 'Poly Quantizer'
body:
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - polyquantizer.png
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The Cherry Audio Poly Quantizer is a polyphonic version of the standard '
      -
        type: text
        marks:
          -
            type: link
            attrs:
              href: 'https://docs.cherryaudio.com/cherry-audio/modules/quantizer'
              target: _blank
              rel: null
        text: Quantizer
      -
        type: text
        text: ' module. This module receives polyphonic pitch CVs via its "poly" input and conforms them to a specific key and scale, or a user-defined set of notes. There are 29 preset scales available and custom scales can easily be created by manually toggling individual notes on or off using the virtual "keyboard." Pitches are tracked and quantized according to the standard 1V/octave scaling.'
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
        text: '- "Poly" input jack for the CVs to be scale quantized. Typically this will originate from the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Pitch'
      -
        type: text
        text: ' jack in the Poly CV Outs section of the I/O Panel.'
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
        type: hard_break
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
        type: hard_break
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
        type: hard_break
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
        text: '- Offsets all input voltages up or down in semitone increments by up to two octaves.'
      -
        type: hard_break
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
        text: "- Input jack for externally controlling the voltage offset of the input signal. Patching the\_"
      -
        type: text
        marks:
          -
            type: italic
        text: 'Pitch CV Out'
      -
        type: text
        text: ' from the I/O panel allows pitch transposition of the input signals in semitones via a keyboard or other CV source.'
      -
        type: hard_break
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
        text: '- Outputs the input signals after being forced to the specified key and scale.'
      -
        type: hard_break
template: modules
seo:
  description: 'The Cherry Audio Poly Quantizer module receives polyphonic pitch CVs via its "poly" input and conforms them to a specific key and scale, or a user-defined set of notes.\_'
  image: /assets/social-modules/poly-quantizer.png
slug: poly-quantizer
blueprint: modules
categories: cv-processors
updated_at: 1593214635
updated_by: a0ce54e0-bf71-4d4c-a5b9-7182705c1bfa
id: 777d99f8-850c-4ea4-8251-2585a9313f31
---
