title: 'Poly Amplifier'
body:
  -
    type: text
    text: '<h1>POLY AMPLIFIER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-amplifier.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Poly Amplifier is a voltage-controlled amplifier (VCA) for polyphonic audio or CV signals. If you need a refresher on how VCAs work, check out the documentation for the standard <a href="https://docs.cherryaudio.com/cherry-audio/modules/amplifier" target="_blank">Amplifier</a> module.</p><p>Below is a simple polyphonic patch where the Poly Amplifier is modulated by a Poly Envelope Generator to control the volume of a Poly Oscillator.</p>'
  -
    type: image
    image:
      - /assets/ug_working-with-poly-modules-image1.jpg
    alignment: left
  -
    type: text
    text: '<h2>Inputs, Outputs, and Controls</h2><p><strong>Input jack</strong>- Use this jack to patch in "poly" audio or control signals to be affected by the&nbsp;<em>Poly </em>and/or<em> Mono CV Mod</em>&nbsp;jacks.</p><p><strong>Gain</strong>-&nbsp;Adds up to 5 volts of gain. This works&nbsp;<em>in addition</em>&nbsp;to incoming&nbsp;<em>CV Mod</em>&nbsp;jack voltages. It''s also useful for manually "opening" the amplifier.<strong><br></strong></p><p><strong>Poly CV Mod jack and attenuator</strong>- This is a "poly" CV input and bipolar attenuator for individually controlling the amplitude of the signals received at the <em>Input</em> jack.</p><p><strong>Mono CV Mod jack and attenuator</strong>- Standard "mono" CV input and bipolar attenuator for simultaneously controlling the amplitude of all signals received at the <em>Input </em>jack.<strong><br></strong></p><p><strong>Response - Lin/Expo</strong>- These select the "curve" of the amplifier''s response as the input CV rises from 0 to 5V.&nbsp;<em>Lin</em>&nbsp;or linear response curve is equally proportional across the voltage input range, where as an&nbsp;<em>Expo</em>&nbsp;or exponential curve is closer to how the human ear perceives volume. With that in mind, you''ll likely want to use the&nbsp;<em>Lin</em>&nbsp;setting for modulation or control voltage situations, and use the&nbsp;<em>Expo</em>&nbsp;setting when an envelope generator is used to control an audio signal with the amplifier.&nbsp;<br></p><p><strong>Output jacks</strong>- The <em>Output</em> jack carries the CV-modified version of the polyphonic input signal. The&nbsp;<em>Inv Out</em>&nbsp;jack outputs an inverted version of the same "poly" signal. Be careful not to use both at the same level as they can cancel the output entirely.<strong><br></strong></p>'
template: documentation
seo:
  description: 'The Cherry Audio Poly Amplifier is a voltage-controlled amplifier (VCA) for polyphonic audio or CV signals.'
  image: /assets/social-modules/poly-amplifier.png
fieldset: documentation
id: 42ff0c35-d1b4-4249-a6a2-42c99549aa83
