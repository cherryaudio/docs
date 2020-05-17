title: 'Poly Quantizer'
body:
  -
    type: text
    text: '<h1>POLY QUANTIZER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-quantizer.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Poly Quantizer is a polyphonic version of the standard <a href="https://docs.cherryaudio.com/cherry-audio/modules/quantizer" target="_blank">Quantizer</a> module. This module receives polyphonic pitch CVs via its "poly" input and conforms them to a specific key and scale, or a user-defined set of notes. There are 29 preset scales available and custom scales can easily be created by manually toggling individual notes on or off using the virtual "keyboard." Pitches are tracked and quantized according to the standard 1V/octave scaling.</p><h2><strong>Inputs, Outputs, and Controls</strong></h2><p><strong>Input jack</strong>- "Poly" input jack for the CVs to be scale quantized. Typically this will originate from the <em>Poly Pitch</em> jack in the Poly CV Outs section of the I/O Panel.</p><p><strong>Scale Select</strong>- Opens a menu to select one of the 29 preset scales.<br></p><p><strong>Key</strong>- Sets the root note or tonic of the scale.<br></p><p><strong>Keyboard Octave</strong>- These 12 black and white keys represent each note of an octave in a standard piano keyboard arrangement. The notes included in the selected scale are illuminated in red and can be toggled on and off to create custom scales by clicking on the buttons.<br></p><p><strong>In Offset</strong>- Offsets all input voltages up or down in semitone increments by up to two octaves.<br></p><p><strong>In Offset CV Mod jack</strong>- Input jack for externally controlling the voltage offset of the input signal. Patching the&nbsp;<em>Pitch CV Out</em> from the I/O panel allows pitch transposition of the input signals in semitones via a keyboard or other CV source.<br></p><p><strong>Output jack</strong>- Outputs the input signals after being forced to the specified key and scale.<br></p>'
template: documentation
seo:
  description: "The Cherry Audio Poly Quantizer module receives polyphonic pitch CVs via its \"poly\" input and conforms them to a specific key and scale, or a user-defined set of notes.\_"
  image: /assets/social-modules/poly-quantizer.png
fieldset: documentation
id: 777d99f8-850c-4ea4-8251-2585a9313f31
