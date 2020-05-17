title: 'Poly Octave Oscillator'
body:
  -
    type: text
    text: '<h1>POLY OCTAVE OSCILLATOR</h1>'
  -
    type: image
    image:
      - /assets/screenshots/ug_poly_octave_oscillator.jpg
    alignment: left
  -
    type: text
    text: '<p>The Cherry Audio Poly Octave Oscillator is a polyphonic oscillator with four mixable octaves per voice. The MIDI input receives pitch and note on/off messages and internally routes them to the oscillator’s frequency and internal amplitude envelope respectively. This module is the perfect starting point for an organ or lush pad! Waveform options are saw, sine and a voltage-controllable variable-width pulse wave.</p><h2>Inputs, Outputs, and Controls</h2><p><strong>MIDI In</strong>- This MIDI input jack receives polyphonic pitch and note on/off messages from a MIDI controller or host DAW. Typically this will be connected to the <em>MIDI From Host</em>&nbsp;output on the I/O panel.</p><p><strong>Freq Mod CV In jack</strong>- Control voltage input for externally modulating the oscillator frequency. Useful for adding vibrato with an LFO, siren noises, envelope-controlled pitch sweeps, etc.</p><p><strong>Freq Mod</strong>- Attenuates the signal received at the Freq Mod <em>CV In</em>&nbsp;jack. At 0% no modulation occurs; at 100% a +/-5V signal will modulate the pitch up and down one octave.</p><p><strong>Octaves and Individual Out jacks</strong>- The sliders act as a mixer for the four octaves of the oscillator. Each octave, labeled in traditional organ footage, is output simultaneously to the main output and its individual output jack at the amplitude specified by the attenuation slider.</p><p><strong>Waveform Selector</strong>- Selects the waveform of the oscillator. Options are saw, sine and a voltage-controllable variable-width pulse wave.</p><p><strong>PW (pulse width)</strong>- Sets the width or "duty-cycle" of the pulse wave. This slider has no effect on the other two waveforms. Its default setting of 50% outputs a perfect square wave, rich in odd-order harmonics. Moving the slider up or down will shorten or lengthen the duty-cycle resulting in a thinner sound at either extreme.</p><p><strong>PWM CV In jack</strong>- Connect an LFO, envelope generator or other mod source here to continuously vary the width of the pulse wave. This is a time-tested analog synthesis trick for adding some serious flavor to a patch!</p><p><strong>PWM</strong>- Sets the amount of pulse-width modulation by attenuating the signal received at the PWM <em>CV In</em>&nbsp;jack.</p><p><strong>Attack</strong>- Adjusts the amount of time it takes for the internal amplitude envelope to raise from zero to its maximum level.</p><p><strong>Sustain</strong>- This button activates or deactivates the sustain stage of the internal amplitude envelope. After the designated attack time, the envelope will either sustain at full volume until a key is released or jump immediately to the envelope’s release stage.</p><p><strong>Release</strong>- Adjusts the amount of time it takes for the internal amplitude envelope to fall from its maximum volume back to zero once the release stage is activated.</p><p><strong>Pitch</strong>- This is a fine tune control for the oscillator. The frequency of the oscillator can be shifted up or down by as little as 0.01 semitones (1 cent) or as much as 7 semitones.</p><p><strong>Output jack and Volume attenuator</strong>- The main output and volume control for the four mixed octaves.</p>'
template: documentation
seo:
  description: 'The Cherry Audio Poly Octave Oscillator is a polyphonic oscillator with four mixable octaves per voice.'
  image: /assets/social-modules/poly-octave-oscillator.png
id: 88cb5fc6-3a92-4de9-8e17-ffe6a70c2b87
slug: poly-octave-oscillator
blueprint: documentation
