title: 'Poly Filter'
body:
  -
    type: text
    text: '<h1>POLY FILTER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-filter.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Poly Filter is a full-featured polyphonic synthesis filter featuring lowpass, bandpass, and highpass outputs, 12- and 24-db per octave slopes, with "poly" and "mono" CV modulation inputs. If you are unfamiliar with filters, check out the documentation for the "standard" <a href="https://docs.cherryaudio.com/cherry-audio/modules/filter" target="_blank">Filter</a> module.</p><p>The image below shows a simple polyphonic patch using several poly modules. The Poly Filter is modulated by a Poly Envelope Generator which results in each individual note, or voice, having its own dedicated filter envelope.</p>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-filter-image1.jpg
    alignment: left
  -
    type: text
    text: '<h2><strong>Inputs, Outputs, and Controls</strong></h2><p><strong>Audio In</strong><strong> jack</strong>- Patch "poly" audio signals in here.&nbsp;</p><p><strong>1V/Oct </strong><strong>jack</strong>- This is a cutoff frequency modulation input intended to be used with polyphonic keyboard CV inputs. It allows the cutoff frequency to follow or "track" notes played so that the relative brightness of notes follows note pitch. This will typically be patched to the <em>Poly Pitch</em> jack in I/O Panel.</p><p><strong>Keyb Tracking</strong>- This is an attenuation control for the signal received at the <em>1V/Oct </em>jack. At 100%, keyboard CVs are tracked at 1V per octave.</p><p><strong>Poly CV Mod </strong><strong>jack and attenuator</strong>- Polyphonic modulation input and bipolar attenuator for controlling the cutoff frequency of each individual note played. This is useful with the Poly Envelope Generator, for example, to create individual filter envelopes for each voice as shown in the image above.</p><p><strong>Mono CV Mod </strong><strong>jack and attenuator</strong>- Standard "mono" CV input and bipolar attenuator for simultaneously controlling the filter cutoff of all voices with one CV signal.</p><p><strong>Cutoff</strong>- Sets the frequency where attenuation begins. Attenuation will be above or below this frequency (or both) depending on which output is currently used. Also something I frequently hear at the bar, as in "you''re cut off, pal!”</p><p><strong>Resonance</strong>- Emphasizes sound energy at and around the current cutoff frequency by adding feedback from the filter''s output back to its input. At lower settings, this can be used to create mild resonances such as those heard in acoustic instruments. At more extreme settings, resonance can create a pure sine wave at its own frequency (variable via the&nbsp;<em>Cutoff</em>&nbsp;knob). Be careful with this knob as it can get loud at extreme settings.</p><p><strong>Slope</strong>- The nature of how a filter works is such that its affect on frequencies "falls off" above or below the cutoff frequency. Slope adjusts the "steepness" of this slope. A 12db per/octave filter has a shallower slope, giving it a clearer and brighter character, whereas a 24db per/octave filter''s steeper slope gives it a tighter and darker tone (as well as more pronounced character with the resonance knob turned up).</p>'
  -
    type: image
    image:
      - /assets/modules/ug_poly-filter-outs.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Lowpass, Bandpass, and Highpass Output Jacks</strong>- These are the poly output jacks for lowpass, bandpass, and highpass modes, respectively. The icons visually represent the effect each has on incoming signals if the signal were to be viewed in a spectrum analyzer. These can be used simultaneously, in any combination. Combining the outputs with a poly mixer can result in interesting curves.</p>'
template: documentation
seo:
  description: 'The Cherry Audio Poly Filter is a full-featured polyphonic synthesis filter featuring lowpass, bandpass, and highpass outputs, 12- and 24-db per octave slopes, with "poly" and "mono" CV modulation inputs.'
  image: /assets/social-modules/poly-filter.png
id: 7240d9d7-544d-4558-8255-85390c37dc28
slug: poly-filter
blueprint: documentation
