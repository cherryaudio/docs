title: 'Synth Voice'
body:
  -
    type: text
    text: '<h1>SYNTH VOICE</h1>'
  -
    type: image
    image:
      - /assets/synthvoice_360px.jpg
    alignment: left
  -
    type: text
    text: '<p>Synth Voice is a powerful, self-contained monophonic synthesizer. It''s inspired by the classic ARP 2600 synthesizer, and like the 2600, features "semi-normalled" audio and modulation paths that enable fast and often wild sound creation. It includes two oscillators, a multimode filter, ADSR and AR envelope generators, a low-frequency oscillator, sample and hold, ring modulation, and a simulated spring reverb. Because it''s part of Voltage Modular, any and all of its individual sections can be combined with other modules for maximum creativity.&nbsp;</p><p>If you don''t want to read this entire guide, please have a look at the <em>"Semi-Normalled Patching</em>" section below, because Synth Voice''s patching works a little differently than most Voltage Modular modules.&nbsp;</p><h2><strong>Semi-Normalled Patching</strong></h2><p>If you''ve worked with cable patch bays in recording studios, you may be familiar with the concept of semi-normalled connections. This means that certain connections are invisibly patched by default if no cable is plugged into a jack, but plugging a cable into the jack interrupts the "normal" signal flow and replaces it with the patched cable. The orange boxes along the bottom of the Synth Voice panel indicate what the source is if nothing is plugged into the the jack above. In other words, <strong>if nothing is plugged into the jack, it''s as if the jack isn''t there. If an audio or control signal is plugged into the jack, the normalled source is overridden, effectively disconnecting it</strong>.&nbsp;</p><p>This applies to Synth Voice in two ways:<br></p><p><strong>External IO Panel Normalized Connections</strong>- The following output jacks in the IO Panel CV SOURCES section are normalled to modulation input jacks at the bottom of the Synth Voice panel.&nbsp;</p>'
  -
    type: table
    table:
      -
        cells:
          - 'IO PANEL - CV SOURCES OUTPUT'
          - 'NORMALIZED MOD DESTINATIONS'
      -
        cells:
          - Pitch
          - 'VCO 1 Pitch, VCO 2 Pitch, VCF Pitch'
      -
        cells:
          - Gate
          - 'ADSR Gate, AR Gate(Trig)'
      -
        cells:
          - Trig
          - 'AR Gate(Trig) [if AR Trig switch is enabled]'
      -
        cells:
          - 'Mod Wheel'
          - 'Low Frequency Oscillator depth [if Mod Whl switch is enabled]'
  -
    type: text
    text: '<p><strong>Plugging a jack into one of the normalized connections at the IO Panel does not disconnect it from Synth Voice</strong>. For example, you could patch the IO Panel <em>Pitch</em> and <em>Gate</em> outputs to other modules without interrupting the normalized connection to Synth Voice.</p><p><strong>Internal Synth Voice Normalized Connections</strong>- All of the orange boxes+jacks along the bottom of the panel, as well as the Sample and Hold section&nbsp;<em>Noise Gen </em>are normalized connections, with the default source indicated in the orange box. <strong>Plugging a cable into the associated Synth Voice jack disconnects the normalized source and replaces it with the patched cable</strong>.&nbsp;<br><br>Almost all of these have an attenuator slider directly above them affecting the amount of either the normalized signal or the currently patched cable.</p><h2><strong>Voltage-Controlled Oscillators 1 &amp; 2</strong></h2><p>Synth Voice includes two super-wide range oscillators that accurately model the imperfect waveforms of vintage ARP synthesizers.&nbsp;</p><p><strong>Initial Freq</strong>- Sets the basic pitch of the oscillator, displayed in traditional organ footage.&nbsp;<em>Lo</em>&nbsp;will be beneath the audible range and allows the oscillator to be used as a mod source.</p><p><strong>Fine Tune</strong>- This can be used to fatten up two-oscillator patches by detuning a small amount, or for "building-in" a set interval. Its range is a smidge over a fifth, up or down.</p><p><strong>Waveform Output Jacks</strong>- Voltage-Controlled Oscillator 1 (VCO 1) includes triangle, ramp, sine, and pulse waves. VCO 2 includes triangle, saw, sine, pulse waves, and sub-octave square- this a 50% square wave one octave below the other VCO 2 waves. It is not affected by pulse width settings.&nbsp;</p><p><strong>Like a vintage ARP 2600, the oscillators do not have switches for wave selection</strong>. Instead, VCO 1''s sawtooth wave and VCO 2''s pulse wave are normalized to the VCF audio ins and gain sliders (at the bottom left of the VCF section). To select a different oscillator wave, patch a cable from the appropriate VCO wave output jack to any of the VCF <em>Audio</em> input jacks. This overrides the "preset" normalled routing.&nbsp;</p><p>Note that VCO 1 and VCO 2''s ramp and saw waves sound exactly the same at audio-range frequencies, but the reversed shapes are useful for rising or falling modulation when the oscillators are set to&nbsp;<em>Lo&nbsp;</em>initial frequency settings and used as mod sources.&nbsp;</p><p><strong>Sync </strong><em>(VCO 2 only)</em>- Feeding a wave or signal to this force resets the start of the waveform to the beginning of its cycle. Most often used to create the "sync sweep" oscillator sounds made famous in The Cars'' "Let''s Go" (or Kraftwerk''s "Neon Lights" and No Doubt''s "Just A Girl"), by routing the output of another oscillator to the&nbsp;<em>Hard Sync</em>&nbsp;input and sweeping the pitch of the first oscillator.</p><p>Hard Sync is also useful when creating drum and percussion sounds to ensure that the wave starts precisely at the beginning of its cycle.</p><p><strong>FM Control/PWM Semi-Normalled Inputs</strong>- Mod inputs at the bottom of the panel. The slider control above each jack is an attenuator, affecting the amount of the normalized source, or if a cable is plugged into the jack, the amount of the signal from the patched source. <br><br>The table below shows the default sources and destinations for VCO 1 and VCO 2:</p>'
  -
    type: table
    table:
      -
        cells:
          - 'MOD SOURCE NAME'
          - 'NORMALIZED SOURCE'
          - 'NORMALIZED DESTINATION'
      -
        cells:
          - 'VCO 1 - Pitch CV'
          - 'IO Panel CV Sources/Pitch'
          - 'VCO 1 frequency - no attenuation slider'
      -
        cells:
          - 'VCO 1 - ADSR'
          - 'Synth Voice ADSR envelope generator'
          - 'VCO 1 frequency'
      -
        cells:
          - 'VCO 1 - VCO 2 Sine'
          - 'Synth Voice VCO 2 sine wave output'
          - 'VCO 1 frequency'
      -
        cells:
          - 'VCO 1 - LFO'
          - 'Synth Voice LFO output'
          - 'VCO 1 pulse width'
      -
        cells:
          - 'VCO 2 - Pitch CV'
          - 'IO Panel CV Sources/Pitch'
          - 'VCO 2 frequency - no attenuation'
      -
        cells:
          - 'VCO 2 - AR'
          - 'Synth Voice AR envelope generator'
          - 'VCO 2 frequency'
      -
        cells:
          - 'VCO 2 - VCO 1 Pulse'
          - 'Synth Voice VCO 1 pulse wave output'
          - 'VCO 2 frequency'
      -
        cells:
          - 'VCO 2 - LFO'
          - 'Synth Voice LFO output'
          - 'VCO 2 pulse width'
  -
    type: text
    text: '<p><strong>Glide</strong>- Also known as "portamento," glide delays the voltage change between pitches for a sliding effect. Synth Voice includes separate <em>Glide </em>controls for each oscillator - applying glide to only one oscillator is nice effect. </p><p><strong>Pitch CV In</strong>- This switch connects or disconnects the normalized IO Panel <em>Pitch</em>&nbsp;CV connection. This defaults to on position, for standard keyboard (or sequencer) playing. Turning it off is useful for drones or sound effects when you don''t want oscillator pitch to be affected by keyboard CV.&nbsp;</p><p>Though the <em>Glide</em> slider is situated above the normalled&nbsp;<em>Pitch</em>&nbsp;source and jack, it is <strong>not</strong>&nbsp;an attenuator for it, but it is in the signal path, so it will affect the normalled pitch CV or any signal plugged into the <em>Pitch</em>&nbsp;FM jack.</p><p><strong>PW Initial</strong>- This sets the width or "duty-cycle" of the pulse wave. It has no effect on any other waveform. This defaults to 50%, i.e., a perfect square wave. Moving the slider up or down narrows its width as well as the thickness of sound until it almost disappears at its extremes.</p><h2><strong>Voltage-Controlled Filter</strong></h2><p>Synth Voice''s filter section models the early "ladder"style filter used in early ARP synthesizers. It can be switched between lowpass and highpass modes, with 12- or 24-db per octave slopes.</p><p>If you''re not familiar with how filters work, a lowpass filter allows frequencies&nbsp;<em>below</em>&nbsp;the cutoff frequency setting to pass through, but blocks frequencies&nbsp;<em>above</em>&nbsp;the cutoff frequency. A highpass filter does opposite: it allows frequencies&nbsp;<em>above</em>&nbsp;the cutoff frequency setting to pass through, but blocks frequencies&nbsp;<em>below</em>&nbsp;the cutoff frequency. In practice, this means a lowpass filter is useful for removing high frequencies, and a highpass filter is useful for removing low frequencies. Modulating the cutoff frequencies via envelope generators, low-frequency oscillators, and more opens the door to endless sound possibilities.&nbsp;</p><p><strong>Cutoff Freq</strong>- Sets the frequency where attenuation begins. Attenuation occurs above (Iowpass mode) or below this frequency (highpass mode).</p><p><strong>Resonance</strong>- Emphasizes sound energy at and around the current cutoff frequency by adding feedback from the filter''s output back to its input. At lower settings, this can be used to create mild resonances such as those heard in acoustic instruments. At more extreme settings, resonance can create a pure sine wave at its own frequency (you can adjust its pitch with the&nbsp;<em>Cutoff</em>&nbsp;knob). Be careful with this knob as it can get loud at extreme settings.</p><p><strong>Mode</strong>- The nature of how a filter works is that frequencies "fall off" above or below the cutoff frequency. Slope adjusts the steepness of this slope. Set to lowpass mode, a 12db per/octave filter has a shallower slope, whereas a 24db per/octave filter has a steeper slope (as well as more pronounced character with the resonance knob turned up).</p><p><strong>VCF Out jack</strong>- The direct audio out of the VCF section.&nbsp;</p><p><strong>Audio and Control Semi-Normalled Inputs</strong>- These are the audio and frequency modulation inputs at the bottom of the filter section. The slider control above each jack is an attenuator, affecting the amount of the normalized source, or if a cable is plugged into the jack, the amount of the signal from the patched source.&nbsp;<br></p><p>The table below shows the filter''s default sources and destinations. The<em> Audio</em> section inputs effectively function as a mixer for Synth Voice''s oscillators, noise generator, or any other audio sources patched to the semi-normalled inputs.&nbsp;</p>'
  -
    type: table
    table:
      -
        cells:
          - 'AUDIO/MOD SOURCE NAME'
          - 'NORMALIZED SOURCE'
          - 'NORMALIZED DESTINATION'
      -
        cells:
          - 'Audio - VCO 1 Saw'
          - 'Synth Voice VCO 1 saw wave'
          - 'VCF audio input'
      -
        cells:
          - 'Audio - VCO 2 Pulse'
          - 'Synth Voice VCO 2 pulse wave'
          - 'VCF audio input'
      -
        cells:
          - 'Audio - Noise Gen'
          - 'Synth Voice white noise generator'
          - 'VCF audio input'
      -
        cells:
          - 'Control - Pitch CV'
          - 'IO Panel CV Sources/Pitch'
          - 'VCF cutoff frequency'
      -
        cells:
          - 'Control - ADSR'
          - 'Synth Voice ADSR envelope generator'
          - 'VCF cutoff frequency'
      -
        cells:
          - 'Control - LFO'
          - 'Synth Voice LFO output'
          - 'VCF cutoff frequency'
  -
    type: text
    text: '<h2>ADSR Envelope Generator</h2><p>A standard "ADSR"-style envelope generator most often used to shape amplitude or filter curves. If you''re not familiar with the operation of envelope generators, here''s an overview:<br></p><p>When a gate voltage is received, the envelope generator outputs a voltage that changes dynamically according to the settings of its four stages.</p>'
  -
    type: image
    image:
      - /assets/ug_envelope_generator_diagram.jpg
    alignment: left
  -
    type: text
    text: '<p>The&nbsp;<em>Attack</em>&nbsp;stage defines how long it takes for the output voltage to rise from 0 to 5 volts. Once the attack stage reaches 5V, it moves to the&nbsp;<em>Decay</em>&nbsp;phase, which defines how long it takes to fall from 5V to the setting of the&nbsp;<em>Sustain</em>&nbsp;phase. Unlike the&nbsp;<em>Attack</em>,&nbsp;<em>Decay</em>, and&nbsp;<em>Release</em>&nbsp;phases, each of which define a time,&nbsp;<em>Sustain</em>&nbsp;simply sets the held voltage level following the&nbsp;<em>Attack</em>&nbsp;and&nbsp;<em>Decay</em>&nbsp;phases - this usually equates to the envelope output level while holding down a key on a keyboard controller. Finally, the&nbsp;<em>Release</em>&nbsp;knob defines the the length of time it takes for the voltage to fall back to 0V when the gate input voltage is removed (typically when you let go of a key on a keyboard controller).</p><p>Keep in mind that the envelope generator moves through its attack and decay segments and holds at the sustain level as long a 5V gate voltage is being received. It moves to the release segment when the gate voltage is removed (i.e., 0V gate voltage).</p><p>Its controls are as follow:</p><p><strong>"A" (Attack) slider</strong>- Defines the length of time for voltage to rise from 0V to 5V when the gate voltage is applied.</p><p><strong>"D" (Decay) slider</strong>- Defines the length of time for voltage to fall from the&nbsp;<em>Attack</em>&nbsp;stage 5V peak to&nbsp;<em>Sustain</em>&nbsp;stage setting.</p><p><strong>"S" (Sustain) slider</strong>- Sets the held voltage level following&nbsp;<em>Attack</em>&nbsp;and&nbsp;<em>Decay</em>&nbsp;phases.</p><p><strong>"R" (Release) slider</strong>- Defines the length of time for voltage to fall from&nbsp;<em>Sustain</em>&nbsp;level to 0V when gate is released.</p><p>The table below shows the default mod destination:</p>'
  -
    type: table
    table:
      -
        cells:
          - 'MOD SOURCE NAME'
          - 'NORMALIZED SOURCE'
          - 'NORMALIZED DESTINATION'
      -
        cells:
          - 'Control - Gate'
          - 'IO Panel CV Sources/Gate'
          - 'ADSR Envelope Generator'
  -
    type: text
    text: '<p><strong>ADSR Out jack</strong>- The envelope generator''s output voltage.&nbsp;<br></p><h2>AR Envelope Generator</h2><p>A simple envelope generator with attack and release segments only. It may seem "stripped down," but AR generators are very useful for basic envelope applications, particularly drum and percussion sounds (which Synth Voice excels at).&nbsp;</p>'
  -
    type: image
    image:
      - /assets/ug_ar_envelope_generator_diagram.jpg
    alignment: left
  -
    type: text
    text: '<p>The AR envelope functions a little differently than the ADSR envelope. If the <em>Sustain</em> switch is on, it moves through the attack segment when a 5V gate is applied and remains at maximum as long as the gate voltage is present (equivalent to an ADSR envelope with its sustain control set to maximum). If the <em>Sustain </em>switch is off, it moves through the release segment regardless of whether the 5V gate voltage is present. </p><p>Its controls are as follow:</p><p><strong>"A" (Attack) slider</strong>- Defines the length of time for voltage to rise from 0V to 5V when the gate voltage is applied.</p><p><strong>"R" (Release) slider</strong>- Defines the length of time for voltage to fall to 0V following the attack segment (<em>Sustain</em> switch off) or when gate voltage is removed ((<em>Sustain</em> switch on).<br></p><p><strong>Trig</strong>- Enabling this causes the AR envelope to move through both of its segments regardless of the gate voltage length. This means trigger signals (i.e. extremely short gates) can be used to run through both stages of the AR envelope. The <em>(Trig)</em> label on the orange mod input legend refers to the gate behavior when the <em>Trig</em> switch is enabled.&nbsp;</p><p><strong>Sustain</strong>- Adds a 5V sustain segment following the attack segment for as long as gate voltage is high. The release segment occurs when the gate voltage is removed. </p><p><strong>Manual Trigger</strong>- Sends a gate signal to both the ADSR and AR envelope for as long as the button is held. This can be useful for testing sounds or playing on the fly. </p><p>The table below shows the default mod destination:</p>'
  -
    type: table
    table:
      -
        cells:
          - 'MOD SOURCE NAME'
          - 'NORMALIZED SOURCE'
          - 'NORMALIZED DESTINATION'
      -
        cells:
          - 'Control - Gate (Trig)'
          - 'IO Panel CV Sources/Gate'
          - 'AR Envelope Generator'
  -
    type: text
    text: '<p><strong>AR Out jack</strong>- The envelope generator''s output voltage.&nbsp;</p><h2>Voltage Controlled Amplifier</h2><p>You can think of the VCA as a "gate" to start, stop, and shape the volume of audio or control signals. Applying a simple 5V gate voltage will abruptly open and close the VCA; the CV output of an envelope generator lets you shape audio and control signals with more finesse.&nbsp;</p><p><strong>Initial Gain</strong>- Sets the static gain of the amplifier; a good analogy would be opening a faucet. For standard instrument-type sounds, you''ll likely leave this set to minimum, as the envelope generators control signals will open the amp when notes are played. Turning up the <em>Initial Gain</em> is useful for "hands-off" droning sounds.&nbsp;</p><p><strong>VCA Out jack</strong>- The output of the VCA. The LED next to the jack lights when a signal is present.&nbsp;</p><p><strong>This <em>VCA Out</em> jack is Synth Voice''s master out, and is not normalled to the IO Panel. You''ll need to patch a cable from this output to one of the IO Panel Main or Aux Out jacks (or a mixer module patched to an IO Panel out) to hear sound.&nbsp;</strong></p>'
  -
    type: table
    table:
      -
        cells:
          - 'AUDIO/MOD SOURCE NAME'
          - 'NORMALIZED SOURCE'
          - 'NORMALIZED DESTINATION'
      -
        cells:
          - 'Audio - VCF output'
          - 'Synth Voice VCF output'
          - 'VCA audio input'
      -
        cells:
          - 'Audio - Ring Mod'
          - 'Synth Voice VCO 1+VCO 2 ring mod'
          - 'VCA audio input'
      -
        cells:
          - 'Control - ADSR'
          - 'Synth Voice ADSR envelope generator'
          - 'VCA amplitude'
      -
        cells:
          - 'Control - AR'
          - 'Synth Voice AR envelope generator'
          - 'VCA amplitude'
  -
    type: text
    text: '<h2>Ring Modulation</h2><p>The Ring Mod input multiplies both oscillator signals by one another, resulting in a signal containing only the sum and difference of the two signals and not the original signals themselves. This often results in tones with unrelated harmonics which can sound harsh or out of tune, but when dialed in carefully can create sounds and timbres hard to create with other methods. For most dramatic effect, try detuning VCO 1 and VCO 2 using the <em>Initial Freq</em> and <em>Fine Tune</em> controls.</p><p>Ring mod is sourced from the <em>VCO 1</em> and <em>VCO 2</em> jacks in at the bottom of the filter section. If nothing is plugged into these jacks, this means the ring mod section receives the VCO 1 sawtooth wave and VCO 2 pulse wave. To send different waves to the ring mod section, patch the desired waves into the VCO 1 and VCO 2 inputs <em>Audio</em> inputs in the VCF section, just as you would for "normal" alternate wave selection. (sine waves from both oscillators sound particularly good with ring mod).&nbsp;</p><h2>Low Frequency Oscillator</h2><p>A low frequency oscillator or "LFO," is similar to an audio oscillator, but it typically runs at frequencies below the range of human hearing, and it isn''t used an audio source. Instead, its cycling waveforms are used as a control source to add modulation to oscillators, filters, and amplifiers.&nbsp;</p><p>A typical application would be to slightly modulate an oscillator’s frequency to create vibrato (pitch modulation), or to modulate a VCA’s amplitude to create a tremolo effect (amplitude modulation). Modulating the cutoff frequency of a filter can create a dubstep-style wobble, or if modulated very slowly, long sweeping tonal shifts.<br></p><p><strong>Frequency</strong>- Sets the rate of the LFO from 0.01 Hz-20 Hz. This guy can get REALLY slow.&nbsp;</p><p><strong>Mod Wheel switch</strong>- Turning this on normalizes the IO Panel <em>CV Sources/Mod Wheel</em> output to LFO depth control. This makes setting up Synth Voice for pitch modulation with a mod wheel easy - turn the switch on, patch a cable from the LFO Out to one or both of the oscillator FM mod jacks, and push up the corresponding FM slider. (Oscillator Pulse Width or VCF mod is even easier, because these have normalized internal routings; simply push up the appropriate fader in the VCO or VCF sections). If the Mod Wheel switch is on and your controller''s mod wheel is at zero, the LFO won''t have any signal output, thus...&nbsp;<strong>if the LFO doesn''t seem to be working, make sure the <em>Mod Wheel</em> switch is in the off position (or push up your controller''s mod wheel)</strong>.&nbsp;</p><p><strong>Waveform Selector</strong>- Switches the LFO''s output to triangle or square wave. The triangle wave is bipolar (i.e. its voltage sweeps above and below 0 volts); this works well for pitch modulation because the pitch rises and falls above and below the center frequency. The square wave is unipolar, that is, it only goes up then returns to zero; this makes it easy to set up pitch trills or octaves. (Setting up a bipolar square wave for alternating octave pitch modulation is difficult because the high note gets higher and low note gets lower as mod depth is increased.)</p><p><strong>Out jack</strong>- CV output of the LFO. You may not need it, because the LFO CV out is normalled to VCO 1 and VCO 2''s pulse width controls, as well as VCF frequency mod, but patching a cable from the jack lets you select other destinations such as VCO pitch, VCA amplitude, or external modules. The LED next to the jack gives a visual indication of the LFO rate.&nbsp;</p><p><strong>Sample and Hold</strong>- The sample and hold section repeatedly “samples” the input signal voltage, and continuously outputs that voltage until it is triggered to sample again.&nbsp; This duration between samples is adjustable with the <em>Frequency</em> slider source. Sampling can be triggered externally with a CV or audio signal. Note that when we say "sample," we''re referring to a simple incoming voltage - this isn''t an audio sampler that you can sample and playback beats with. (Though this is the basic principle of how digital audio samplers operate).</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_sample-and-hold_image_2.jpg
    alignment: left
  -
    type: text
    text: '<p>In the image above, the smooth gray line shows a continuous input signal. Each time the module is triggered, the current voltage is “sampled” and “held” until the next trigger. The red line shows the stepped output signal.</p><p><strong>Frequency- </strong>Sets how often the incoming signal is sampled. This could also be referred to as the sample or clock rate. Unlike many hardware analog synths with sample and hold, Synth Voice''s sample frequency isn''t tied to the LFO section; the sample and hold section has its own independent internal LFO clock.&nbsp;</p><p>Though it''s not at the bottom of the panel with the rest of the normalized connections, the <em>Noise Gen+In</em>&nbsp;jack is a normalized connection so here''s another swell table:</p>'
  -
    type: table
    table:
      -
        cells:
          - 'AUDIO/MOD SOURCE NAME'
          - 'NORMALIZED SOURCE'
          - 'NORMALIZED DESTINATION'
      -
        cells:
          - 'Noise Gen'
          - 'Synth Voice white noise generator'
          - 'sample and hold sample source'
  -
    type: text
    text: '<p>White noise is commonly used as a sample source with sample and hold modules because it creates completely random voltages. If applied to oscillator pitch, this results in note sequences with random pitches. Filter cutoff frequency modulation is another common use (one famous example is the percolating note sequence at the beginning of Emerson, Lake, and Palmer''s "Karn Evil #9," better known as "welcome back my friends, to the show that never ends..."). LFO waves can also be used as signal sources - oscillator ramp and sawtooth waves at sub-audio rates can be used to create interesting rising and falling modulation patterns.&nbsp;</p><p><strong>Out jack</strong>- CV output of the sample and hold. The sample and hold''s output isn''t normalized to any destinations, so you''ll need to patch this to the desired mod destination with a cable.The LED next to the output jack flashes at the current sample frequency.&nbsp;</p><h2>Master Section</h2><p><strong>Tune</strong>- The master tuning knob affects both oscillators simultaneously and has a range of a half-step up or down.&nbsp;</p><p><strong>Reverb</strong>- This is an accurately modeled spring reverb. Like a real spring reverb, certain frequencies will excite and "ring" in funny ways sometimes. In other words, it isn''t intended to precisely replicate the acoustics of The Royal Albert Hall. Note that dry signal remains constant; the knob mixes the reverberated signal from 0-200%, allowing really wet sounds.&nbsp;</p><p><strong>Volume</strong>- This is post-VCA, and regulates the volume of all sound coming from Synth Voice.&nbsp;</p>'
template: documentation
seo:
  description: 'Allows accurate synchronization to DAW software using the Voltage IO Panel Sync Out jack. Divides from four bars to 1/32-notes, including dotted and triplet values.'
  image: /assets/social-modules/sync-divider.png
fieldset: documentation
id: 2fbe18c6-3a69-47a8-94b0-2d41b4413b6d
