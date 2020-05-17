title: 'Working With Poly Modules'
body:
  -
    type: text
    text: '<h1>WORKING WITH POLY MODULES</h1>'
  -
    type: image
    image:
      - /assets/screenshots/ug_poly-cv-outs.jpg
    alignment: left
  -
    type: text
    text: '<p>The "Poly" modules in Voltage Modular make use of a special "Poly" cable, identifiable by its slight larger "D-shaped" connector.&nbsp;Each poly jack and cable can transmit up to sixteen separate channels, or "lanes," of CV or audio to drastically simplify creating polyphonic patches.&nbsp;</p><p>A basic polyphonic patch typically needs an oscillator, envelope and amplifier for each voice. To create eight-voice polyphony, that’s already 24 modules! Once additional envelopes, filters, modulations etc. are added, it’s easy for a patch to become a huge mess! Poly modules make it easy!</p><p>Each poly module can be thought of as a "stack" of regular modules. The number of modules in the stack is defined by the <em>Number Of Voices</em> setting in the I/O Panel. When set to eight, for example, every poly module is actually a stack of eight standard modules, and every poly jack can send or receive eight individual channels, or "lanes" of CV or audio. This means that only three poly modules are needed to create a patch that would take 24 "mono" modules!</p><h2>Let’s look at an example to see how it all works</h2>'
  -
    type: image
    image:
      - /assets/ug_working-with-poly-modules-image1.jpg
    alignment: left
  -
    type: text
    text: '<p>In the patch above, the polyphonic note data received from a MIDI controller is sent from the <em>Poly Pitch</em> jack on the I/O Panel to the <em>Poly Keyb CV</em> jack of the Poly Oscillator module. This one cable can send up to eight pitch CVs simultaneously to individual oscillators in the stack. The <em>Poly Gate</em> output jack in the I/O Panel is patched to the <em>Gate In</em> jack of the Poly Envelope Generator which triggers a stack of envelopes which control the amplitude of each oscillator using the Poly Amplifier module.&nbsp;</p><p>To patch the output from the Poly Amplifier to the <em>Main Outs</em>, we need to mix the eight lanes of audio back down to a regular "mono" signal. In the patch above, this is done using a Mini Poly To Mono module. Alternatively, a stereo mix of the eight signals can be made using a Poly Spread module which mixes a poly signal to a stereo output with width control.</p><p>In addition to poly oscillators, filters, amps, mixers, etc., Voltage Modular includes a number of utility modules for splitting and converting poly cables to standard "mono" signals and vice-versa, creating a tremendous amount of flexibility!</p><ul><li>Note that in order to save CPU, when the <em>Poly Pitch</em> jack in the Poly CV Outs section of the I/O Panel isn''t patched to anything, the <em>Poly Gate</em> and <em>Poly Vel</em>&nbsp;jacks won''t output CVs. If these jacks need to be used by themselves, the <em>Poly Pitch</em> jack can be patched to the input of a "dummy" module like the Poly Multiple, for example, to activate the <em>Poly Gate</em> and <em>Poly Vel </em>outputs.</li></ul>'
template: documentation
fieldset: documentation
id: be8b999b-8f9d-42e3-871d-cbea7f82cb53
