title: 'Percussion EG'
body:
  -
    type: text
    text: '<h1>PERCUSSION EG</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_percussion-eg.jpg
    alignment: left
  -
    type: text
    text: '<p>The Percussion EG (Envelope Generator) module is an envelope generator with controls optimized for percussive sounds. It features a continuously variable exponential to logarithmic decay curve, click enable switch, attack peak hold knob, and accent and choke inputs making this the perfect go-to envelope for sculpting a percussion sound from scratch.</p><h2>Inputs, Outputs, and Controls</h2><p><strong>Trig In jack</strong>- A 5V gate or trigger received at this jack will trigger the envelope. If a gate signal is used, the length is ignored as this is a "one shot" envelope and has no sustain stage.</p><p><strong>Accent In jack</strong>- A 5V gate or trigger received at this jack triggers the same envelope shape only with a greater amplitude (set by the <em>Accent Leve</em>l knob). This can be used to create a second, "louder" version of the envelope that can be used to create accented drum patterns. The Drum Trigger Sequencer has dedicated <em>Acc (Accent)</em> output jacks that are perfect for triggering this. Note that if the envelope is modulating something other than an amplifier, the sound will not necessarily be louder. Instead, the accent will increase the modulation amount.</p><p><strong>Click</strong>- Adds a distinct "click" at the beginning of the envelope to add presence to the beginning of a drum sound.</p><p><strong>Choke</strong>- A 5V gate or trigger received at this jack will immediately force the envelope to 0V. This can be used to stop the ringing of a long drum or to "close" an open hi-hat sound.</p><p><strong>Attack Hold</strong>- Adjusts how long the the envelope will stay at 5V before starting the <em>Decay </em>stage.</p><p><strong>Accent Level</strong>- This knob scales the amplitude of the accent envelope by as much as 400%. The accent envelope is triggered via the <em>Accent</em> <em>In</em> jack.</p><p><strong>Decay</strong>- Defines the length of time it takes for the envelope’s voltage to drop from 5V back to 0V. This can be set extremely short (making it perfect for adding a little “smack” to a sound), or as long as 2.5 seconds.</p><p><strong>Decay Curve</strong>- Adjusts the shape, or curve, of the envelope’s <em>Decay</em> stage from logarithmic when turned to the left, to linear at its center position, to exponential when turned to the right.&nbsp;</p><p><strong>Env Out jack</strong>- This is the output jack for the envelope.</p>'
template: documentation
seo:
  description: 'The Percussion EG (Envelope Generator) module is an envelope generator with controls optimized for percussive sounds. It features a continuously variable exponential to logarithmic decay curve, click enable switch, attack peak hold knob, and accent and choke inputs making this the perfect go-to envelope for sculpting a percussion sound from scratch.'
  image: /assets/social-modules/percussion-eg.png
fieldset: documentation
id: 5a648956-8de2-44f8-8910-71bb335ec1e4
