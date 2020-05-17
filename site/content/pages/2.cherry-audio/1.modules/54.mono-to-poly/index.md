title: 'Mono To Poly'
body:
  -
    type: text
    text: '<h1>MONO TO POLY</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_mono-to-poly.jpg
    alignment: left
  -
    type: text
    text: '<p>The Mono To Poly module accepts up to 16 individual CV or audio inputs and converts them to a single multi-channel "poly" output. The module can be used with CVs to send different envelopes, LFOs, pitch CVs etc. to each individual voice of a polyphonic patch or to convert multiple mono audio signals, such as oscillators, to a "poly" audio signal.</p><h2>Let’s look at an example.</h2><p>In the patch below, four LFOs are patched to a Mono To Poly module’s inputs to create a "poly" CV signal that is modulating the cutoff frequency of a Poly Filter module. This results in a patch where each of its four active voices have a different LFO rate modulating its filter.</p>'
  -
    type: image
    image:
      - /assets/modules/ug_mono-to-poly-image1.jpg
    alignment: left
  -
    type: text
    text: '<h2>Inputs, Outputs, and Controls</h2><p><strong>Input jacks</strong>- Each input jack can receive a unique CV or audio signal that will be "packaged" together and output as individual channels, or "lanes," of the poly output signal. The number of active inputs depends on the <em>Number of Voices</em> setting in the I/O Panel. When the patch is set to eight voices, for example, the LEDs for <em>Inputs 1 - 8</em> will glow red to indicate that they are active. Signals received by inputs that are not active will not be passed to the output.</p><p><strong>CV Type</strong>- This is a handy little text box that can be used to label the module. To change the text, click in the box labeled "Click to enter label" and begin typing.</p><p><strong>Poly Out jack</strong>- Outputs the CV or audio signals received by the active input jacks as a multi-channel "poly" signal.</p><p><strong>Out Level</strong>- Simultaneously adjusts the output level of all channels of the poly signal.</p>'
template: documentation
seo:
  description: 'The Mono To Poly module accepts up to 16 individual CV or audio inputs and converts them to a single multi-channel "poly" output.'
  image: /assets/social-modules/mono-cv-to-poly.png
fieldset: documentation
id: ba86a240-680d-4c52-8830-2dc9a853c984
