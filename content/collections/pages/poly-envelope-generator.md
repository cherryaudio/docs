title: 'Poly Envelope Generator'
body:
  -
    type: text
    text: '<h1>POLY ENVELOPE GENERATOR</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-envelope-generator.jpg
    alignment: left
  -
    type: text
    text: '<p>Cherry Audio’s Poly Envelope Generator is a polyphonic ADSR with sustain control that drastically simplifies creating polyphonic patches. It takes a polyphonic gate signal as its input and generates control voltage envelopes for each individual note, or voice. If you are unfamiliar with envelopes in general, or need a quick refresher, check out the documentation for the "standard"&nbsp;<a href="https://docs.cherryaudio.com/cherry-audio/modules/envelope-generator" target="_blank">Envelope Generator</a> which goes over ADSR envelopes in detail.<br></p><p>Below is an example of a simple polyphonic patch with sustain control that uses the Poly Envelope Generator to control the amplitude of a Poly Oscillator module.</p>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-envelope-generator-image2.jpg
    alignment: left
  -
    type: text
    text: '<h2><strong>Inputs, Outputs, and Controls</strong></h2><p><strong>Gate In jack</strong>- Patch polyphonic gate signals here to trigger the envelope. Typically this will be connected to the <em>Poly Gate</em> jack in the I/O Panel.</p><p><strong>Sustain Pedal In jack</strong>- A +5V gate signal received at this jack holds the envelope at its sustain level. Typically this is patched to the <em>Sus</em> (sustain) jack in the CV Outs section of the I/O Panel which converts MIDI sustain pedal messages (CC#64) from a keyboard controller to a +5V gate signal.</p><p><strong>"A" (Attack) slider</strong>- Defines the length of time for voltage to rise from 0V to 5V when the gate voltage is applied.</p><p><strong>"D" (Decay) slider</strong>- Defines the length of time for voltage to fall from the&nbsp;<em>Attack</em>&nbsp;stage 5V peak to&nbsp;<em>Sustain</em>&nbsp;stage setting.<br></p><p><strong>"S" (Sustain) slider</strong>- Sets the held voltage level following&nbsp;<em>Attack</em>&nbsp;and&nbsp;<em>Decay</em>&nbsp;phases.<br></p><p><strong>"R" (Release) slider</strong>- Defines the length of time for voltage to fall from&nbsp;<em>Sustain</em>&nbsp;level to 0V when gate is released.<br></p><p><strong>Env Out and Env Out Inv</strong>- These are the envelope voltage outputs. The&nbsp;<em>Env Out</em>&nbsp;voltage ranges from 0V to +5V, whereas the&nbsp;<em>Env Out Inv</em>&nbsp;jack is an inverted version, with output ranging from 0V to -5V.&nbsp;<br></p>'
template: documentation
seo:
  description: 'Cherry Audio’s Poly Envelope Generator is a polyphonic ADSR with sustain control that drastically simplifies creating polyphonic patches.'
  image: /assets/social-modules/poly-envelope-generator.png
id: afb348f0-1cf1-4b59-8785-592b17aca8e0
slug: poly-envelope-generator
blueprint: documentation
