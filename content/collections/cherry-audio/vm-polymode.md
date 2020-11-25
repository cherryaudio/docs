---
title: Polymode
categories: instruments
body:
  -
    type: paragraph
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polymode_full-1597795079.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Polymode is a complete instrument module for Voltage Modular, inspired by the infamous 70s-era Polymoog synthesizer. One of the world''s first polyphonic synthesizers, it excels at large pads, strings, and vocal-esque sounds, and its unique multiple filter implementation and mod routings gives it a sound like no other synth. '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Unfortunately, original Polymoogs are known to be highly unreliable as a result of their elaborate circuitry and the inconsistent quality control of 70s electronic components. They were also really expensive ($5200 in mid-70s dollars!), weighed a ton, sensitive to movement, and relatively confusing to operate. The Voltage Modular Polymode module sidesteps every one of these drawback - hooray for modern computers! Of course we''ve eliminated all of the Polymoog''s reliability issues, we''ve updated its controls to make it MUCH easier to use, and we''ve added CV mod ins to almost every control for immense improvement in creative possibilities. '
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        text: 'Polymode Signal Flow'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The original Polymoog works like a string synthesizer (or a transistor organ) on steroids. The pitches of two fixed high-frequency square-wave oscillators  are "divided-down" (i.e. slowed down) to the frequency of each chromatic note of the very top octave. Another series of IC''s halves the top-octave chromatic notes to create the remaining pitches for the entire length of the keyboard. This is how just about every 60s and 70s transistor organ and 70s string synth works (as well as a number of 70s polyphonic sort-of synthesizers such as the ARP Quadra, Korg Delta, etc.). '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Though it sounds convoluted, top-octave divide synthesis (referred to as "TOC") was common because it''s easy and cheap from an electronics standpoint, but it can only product square waves, which severely limits the tonal palette. To get around this, the Polymoog contained a small circuit board called a "poly card" beneath each key with a custom IC chip (the "Polycom IC") that converted the square wave to a ramp wave and allowed the pulse width of the square wave to be adjusted and modulated. Because of its separate note generation for each key, TOC-based synths can''t have a "mono mode," thus keyboard glide can''t be implemented. Though we did not implement this "top-down" divide+waveshapers for every note in Polymode (because it''s a bear on CPU load), we did go to great lengths to model the resulting idiosyncratic oscillator waves with great precision. Here''s what the signal path looks like:'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - polymode_blockDiagram-v2.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Following the oscillator "ranks" are the VCA/Amplitude Envelopes. This is unlike just about any other analog synthesizer - the VCA is almost always '
      -
        type: text
        marks:
          -
            type: italic
        text: after
      -
        type: text
        text: ' the filter(s), not before. This is because the original Polymoog featured individual VCA/Amplitude envelopes for every note on the aforementioned poly com cards beneath each key. It also means that '
      -
        type: text
        marks:
          -
            type: italic
        text: 'every single note has its own independent envelope generator'
      -
        type: text
        text: '. The downside of this arrangement it that the VCF cannot be self-resonating because once it started "ringing," there would be nothing to stop its sound - in a more conventional analog synth, playing the keyboard would open and close the VCA, thereby stopping sound from the ringing filter. '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Following the VCA/Amplitude Envelopes are three (!) separate filters, all fed in parallel. Mixing and matching these in the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Master Gain'
      -
        type: text
        text: ' mixer section, along with the unfiltered '
      -
        type: text
        marks:
          -
            type: italic
        text: Direct
      -
        type: text
        text: ' signal, is one of the niftiest things to do with a Polymoog (in turn, this is greatly enhanced by the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Master Gain'
      -
        type: text
        text: ' mixer''s CV mod inputs). The filters are:'
  -
    type: paragraph
    content:
      -
        type: text
        text: '• '
      -
        type: text
        marks:
          -
            type: italic
        text: Resonators
      -
        type: hard_break
      -
        type: text
        text: '• '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Mode Filters'
      -
        type: hard_break
      -
        type: text
        text: '• '
      -
        type: text
        marks:
          -
            type: italic
        text: VCF
  -
    type: paragraph
    content:
      -
        type: text
        text: 'We''ll go over each filter in detail later on. '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: italic
        text: Resonators
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Mode Filters'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: VCF
      -
        type: text
        text: ' are fed to the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Master Gain '
      -
        type: text
        text: 'mixer, and then to the '
      -
        type: text
        marks:
          -
            type: italic
        text: Mix
      -
        type: text
        text: ' out jack in the bottom right '
      -
        type: text
        marks:
          -
            type: italic
        text: Outputs
      -
        type: text
        text: ' section. The direct and filter signals can be individually routed as well.'
  -
    type: paragraph
    content:
      -
        type: text
        text: ————
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
          -
            type: italic
        text: 'Polymoog Lower/Upper/Octave Bal Controls- '
      -
        type: text
        text: 'The original Polymoog included "lower" and "upper" duplicates of a number of its controls, allowing independent adjustment of various parameters at a fixed keyboard split point. Because only certain parameters had the dual controls, this resulted in a pretty half-baked attempt at keyboard split capabilities, and along with the already unusual control layout, tended to make the Polymoog even more confusing. On top of this, the Polymoog had three volume sliders that split the keyboard into three volume zones (with different fixed split points than the upper/lower controls!) for extra bonus confusion. We''ve eliminated all of this extra-control-splitty madness from Polymode. Trust us, you''ll be much happier this way - I can''t say how many times these multiple controls have derailed me while making sounds on my vintage Polymoog.'
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        text: 'Polymode Inputs, Outputs, and Controls'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Normally we would detail a module''s controls from left to right, but because Polymoog/Polymode doesn''t exactly have a left-to-right signal flow, we''ll start with the top left controls, then follow the actual signal path. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Control/Normalled Cable Connections'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Polymode accepts controls signal exclusively from the IO Panel '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Sources'
      -
        type: text
        text: ' section. It doesn''t have a "mono" mode per se, but it can easily be played monophonically by setting the IO Panel '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Number of Voices'
      -
        type: text
        text: ' control to '
      -
        type: text
        marks:
          -
            type: italic
        text: '1'
      -
        type: text
        text: '. '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'For convenience, Polymode takes advantage of Voltage Modular''s cable normalling feature. Cable normalling allows us to design modules with automatic, "invisible" cables routings. By default, Polymode always has normalled poly cables routed from the IO Panel''s '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Pitch'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Gate'
      -
        type: text
        text: ', and '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Vel'
      -
        type: text
        text: ' outputs to Polymode''s '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Pitch'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Gate'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Vel'
      -
        type: text
        text: ' inputs. In other words, it''s the equivalent of patching cables like this...'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polymode_cablenormal.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: '... without having to patch anything. The little green-framed boxes beneath the jacks are a visual reminder of the normalled connections (note how the boxes are the same color as the IO Panel '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Sources'
      -
        type: text
        text: ' section). '
      -
        type: hard_break
      -
        type: hard_break
      -
        type: text
        text: 'If you''d like to patch a signal from a source other than the IO Panel, plugging a cable into any of the '
      -
        type: text
        marks:
          -
            type: italic
        text: Control
      -
        type: text
        text: ' jacks overrides the normalled IO Panel connections. If you''d like to use the IO Panel outputs with additional cables, simply patch a cable from the IO Panel output plus any other cables to the '
      -
        type: text
        marks:
          -
            type: italic
        text: Control
      -
        type: text
        text: ' input jack.'
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Control Section'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Poly Pitch'
      -
        type: text
        text: '- Input for poly pitch control. This is normalled from the IO Panel Poly Sources '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Pitch'
      -
        type: text
        text: ' output.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Poly Gate'
      -
        type: text
        text: '- Input for poly gate control. This is normalled from the IO Panel Poly Sources '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Gate'
      -
        type: text
        text: ' output.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Poly Vel'
      -
        type: text
        text: '- Input for poly velocity control. This is normalled from the IO Panel Poly Sources '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Vel'
      -
        type: text
        text: ' output.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'While we''re in that neck of the IO Panel woods, the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Number of Voices '
      -
        type: text
        text: 'control defines Polymode''s maximum polyphony. Dialing this down can be helpful if you''re experiencing CPU load issues, but you probably won''t, as Polymode is pretty light on CPU. '
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Master Tune/Pitch Bend'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Mast Tune'
      -
        type: text
        text: '- Sets overall tuning up or down a half-step.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Pitch Bend and CV input jack'
      -
        type: text
        text: '- Sets the range of incoming pitch bend data from zero to one octave. Similar to the '
      -
        type: text
        marks:
          -
            type: italic
        text: Control
      -
        type: text
        text: ' section poly jacks, the IO Panel CV Sources '
      -
        type: text
        marks:
          -
            type: italic
        text: Bend
      -
        type: text
        text: ' CV out jack is normalled to Polymode''s '
      -
        type: text
        marks:
          -
            type: italic
        text: Bend
      -
        type: text
        text: ' CV in jack (indicated by the dark orange box). This means it''s connected by default, but can be overridden by plugging a patch cable into it. '
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Oscillators - Rank 1 / Rank 2'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polymode_ranks.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In Polymoog parlance, each of the two polyphonic oscillator banks is referred to as a "rank," which is good ol'' medieval organ terminology (as are commonly used octave footage numbers). We made the decision to greatly alter the oscillator rank section layout because frankly, the original Polymoog rank controls are really confusing, and offer no improvement in functionality over the more standard layout we''ve implemented in Polymode. Additionally, the original Polymoog allowed rank 1 to produce '
      -
        type: text
        marks:
          -
            type: italic
        text: only
      -
        type: text
        text: ' square and pulse waves, and rank 2 to produce '
      -
        type: text
        marks:
          -
            type: italic
        text: only
      -
        type: text
        text: ' ramp waves. We felt this was a silly limitation, so we''ve enabled ramp/square/pulse waves either alone or in combination for both oscillator ranks. The controls for both oscillator ranks are identical with the exception of the Rank 2''s '
      -
        type: text
        marks:
          -
            type: italic
        text: Fine
      -
        type: text
        text: ' tune control and are as follows:'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Range buttons'
      -
        type: text
        text: '- Sets the basic pitch range of the oscillator rank, displayed in traditional organ footage. Only one range button can be enabled at any time.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Waveform buttons'
      -
        type: text
        text: '- Selects ramp and/or pulse waves. These may be used independently or in combination.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Fine '
      -
        type: text
        marks:
          -
            type: bold
          -
            type: italic
        text: '(Rank 2 only)'
      -
        type: text
        text: '- Fine-tune control for pitch. This can be used to fatten up patches by detuning a small amount, or for "building-in" a set interval. Its range is a smidge over a fifth, up or down.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'FM - Rate/Amount'
      -
        type: text
        text: '- Each oscillator rank includes a dedicated triangle-wave LFO for frequency (pitch) modulation. The '
      -
        type: text
        marks:
          -
            type: italic
        text: Rate
      -
        type: text
        text: ' slider controls LFO speed, and the '
      -
        type: text
        marks:
          -
            type: italic
        text: Amount
      -
        type: text
        text: ' slider controls LFO depth. The CV jacks and attenuators beneath the sliders allow positive or inverted voltage control of the slider amounts.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Shape/Mod - Shape'
      -
        type: text
        text: '- Sets the initial pulse-width of the pulse wave. 5% is narrowest setting and 50% is a full square wave. The CV jack and attenuator beneath the slider allow positive or inverted voltage control of the shape slider.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Shape/Mod - Rate/Amount'
      -
        type: text
        text: '- Each oscillator rank includes a dedicated triangle-wave LFO for pulse-width modulation (i.e., separate from the frequency mod LFO). The '
      -
        type: text
        marks:
          -
            type: italic
        text: Rate
      -
        type: text
        text: ' slider controls LFO speed, and the '
      -
        type: text
        marks:
          -
            type: italic
        text: Amount
      -
        type: text
        text: ' slider controls LFO depth. '
  -
    type: paragraph
    content:
      -
        type: text
        text: ————
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
          -
            type: italic
        text: 'Polymode''s Four Independent Pitch and Pulse Width Mod LFO''s - '
      -
        type: text
        text: 'Most classic polysynths have one LFO, routed via some kind of mod destination selector. Polymode is unique in that it features dedicated LFO''s for pitch mod and pulse width, for '
      -
        type: text
        marks:
          -
            type: italic
        text: each
      -
        type: text
        text: ' oscillator (because one of the oscillator ranks was ramp-wave only on the original Polymoog, it had an LFO for rank one pulse-width, and separate LFO''s for pitch mod of each oscillator rank). '
      -
        type: text
        marks:
          -
            type: bold
        text: 'This multiple and independent modulation is the key to achieving the swirly, warbly sounds the Polymoog is famous for, particularly the "'
      -
        type: text
        marks:
          -
            type: bold
          -
            type: italic
        text: 'Vox Humana'
      -
        type: text
        marks:
          -
            type: bold
        text: '" preset made famous by synthpop icon and spiffy dresser, Gary Numan. '
  -
    type: paragraph
    content:
      -
        type: text
        text: ————
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Rank Mix-'
      -
        type: text
        text: ' Balances the level of oscillator '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Rank 1'
      -
        type: text
        text: ' and '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Rank 2'
      -
        type: text
        text: '. Set to the middle for an equal mix. The CV jack and attenuator beneath the slider allow voltage control of the mix.'
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Amplitude Envelope'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polymode_ampEnv.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The Amp Envelope controls Polymode''s voice amplitude. Like most modern poly synths, each voice (up to a maximum of 16) has its own independent envelope and associated voltage-controlled amplifier. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Vel (Velocity)'
      -
        type: text
        text: '- Defines how much the envelope affects amplitude via keyboard velocity. Remember that the IO Panel Poly Sources '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Vel'
      -
        type: text
        text: ' output is normalled to the Controls '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Poly Vel'
      -
        type: text
        text: ' input, so you won''t need to patch a cable to utilize amp envelope velocity. A setting of zero gives maximum dynamic range; at a setting of 10, keyboard velocity has no effect on amplitude, and is essentially full blast all the time. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Att (Attack)'
      -
        type: text
        text: '- Defines the length of time for VCA amplitude mod voltage to rise from minimum to maximum.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'D/R (Decay/Release)'
      -
        type: text
        text: '- Defines the length of time for VCA amplitude mod voltage to fall from the '
      -
        type: text
        marks:
          -
            type: italic
        text: Att
      -
        type: text
        text: "\_stage peak to "
      -
        type: text
        marks:
          -
            type: italic
        text: 'Sus '
      -
        type: text
        text: 'stage setting (key held) or fall to zero (key released). '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Sus (Sustain)'
      -
        type: text
        text: '- Sets the held amplitude voltage following '
      -
        type: text
        marks:
          -
            type: italic
        text: Att
      -
        type: text
        text: "\_and "
      -
        type: text
        marks:
          -
            type: italic
        text: D/R
      -
        type: text
        text: "\_phases (key held)."
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Resonators
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polymode_resonators.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The Polymoog '
      -
        type: text
        marks:
          -
            type: italic
        text: Resonators
      -
        type: text
        text: ' section is one of its most unique features. It consists of three state-variable filters in a parallel configuration. The parallel routing means the signal is split and runs into all three filters with their collective outputs summed together. Cranking up the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Emph '
      -
        type: text
        text: "controls (aka, resonance) for each band can create three individual \"peaks\" or resonances, hence the \"resonator\" name.\_"
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Another unusual aspect of the original Polymoog Resonators section is that each is band-limited. Most synthesizer filters are configured such that the cutoff frequency covers the entire audible sound spectrum (20-20,000 Hz, give or take), whereas each of the three Polymoog resonators cover a "slice" of the audio spectrum, i.e. low, med, and high frequencies as follows:'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Low: 60 - 300 Hz'
      -
        type: hard_break
      -
        type: text
        text: 'Med: 300 - 1500 Hz'
      -
        type: hard_break
      -
        type: text
        text: 'High: 1500 - 7500 Hz'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The original Polymoog '
      -
        type: text
        marks:
          -
            type: italic
        text: Resonators
      -
        type: text
        text: ' section has two major shortcomings: the filter slopes are a little too shallow to create really dramatic resonance effects, and the cutoff frequencies aren''t CV controllable. We''ve addressed both of these issues with a 12/24 db slope selector, as well as bipolar CV inputs for each cutoff frequency '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: italic
        text: Resonators
      -
        type: text
        text: ' section excels at creating formant-type sounds, and is also great at emulating phaser-type sounds when its cutoff frequencies are swept via CV modulation. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Pass Mode '
      -
        type: text
        text: '- Globally selects the behavior of all three filters. '
      -
        type: text
        marks:
          -
            type: italic
        text: Lowpass
      -
        type: text
        text: ' mode allows frequencies '
      -
        type: text
        marks:
          -
            type: italic
        text: below
      -
        type: text
        text: "\_the cutoff frequency setting to pass through, "
      -
        type: text
        marks:
          -
            type: italic
        text: Highpass
      -
        type: text
        text: ' mode allows frequencies '
      -
        type: text
        marks:
          -
            type: italic
        text: above
      -
        type: text
        text: "\_the cutoff frequency setting to pass through, and "
      -
        type: text
        marks:
          -
            type: italic
        text: Bandpass
      -
        type: text
        text: " mode combines both\_lowpass and highpass modes, leaving sound only \"in the middle.\" The cutoff frequency lies roughly halfway between the falloff slope on each side.\_"
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Slope
      -
        type: text
        text: '- The nature of how a filter works is that frequencies "fall off" above or below the cutoff frequency. Slope adjusts the steepness of this falloff, hence the "slope" terminology. A 12db per/octave filter has a shallower slope, giving it a clearer and brighter character, whereas a 24db per/octave filter''s steeper slope gives it a tighter and darker tone and far more pronounced ringing characteristic when the '
      -
        type: text
        marks:
          -
            type: italic
        text: Emph
      -
        type: text
        text: "\_slider is turned up."
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Since the controls for the '
      -
        type: text
        marks:
          -
            type: italic
        text: Low
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: Med
      -
        type: text
        text: ', and '
      -
        type: text
        marks:
          -
            type: italic
        text: High
      -
        type: text
        text: ' sections are the same other than frequency range, we''ll explain them once:'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'CF (Cutoff Frequency)'
      -
        type: text
        text: '- Sets the frequency where attenuation begins. Attenuation will be above or below this frequency (or both) depending on the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Pass Mode '
      -
        type: text
        text: "switch setting.\_The CV jack and attenuator beneath the slider allow positive or inverted voltage control of cutoff frequency."
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Emph (Resonance)'
      -
        type: text
        text: "- Emphasizes sound energy at and around the current cutoff frequency by adding feedback from the filter's output back to its input. At lower settings, this can be used to create mild resonances such as those heard in acoustic instruments. At more extreme settings, resonance can create a pure sine wave at its own frequency (variable via the\_"
      -
        type: text
        marks:
          -
            type: italic
        text: CF
      -
        type: text
        text: "\_slider). Be careful with the "
      -
        type: text
        marks:
          -
            type: italic
        text: 'Emph '
      -
        type: text
        text: 'sliders as they can get loud at extreme settings (you can easily control this using each section''s '
      -
        type: text
        marks:
          -
            type: italic
        text: Gain
      -
        type: text
        text: ' slider). Note that this "ringing" resonant frequency is much more prominent with the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Slope '
      -
        type: text
        text: 'switch in the '
      -
        type: text
        marks:
          -
            type: italic
        text: 24db
      -
        type: text
        text: "\_position.\_The CV jack and attenuator beneath the slider allow positive or inverted voltage control of emphasis amount."
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Gain
      -
        type: text
        text: "- This acts as a volume control for each resonator section. Resonator sections can be muted by setting their\_"
      -
        type: text
        marks:
          -
            type: italic
        text: 'Gain '
      -
        type: text
        text: "control to 0%.\_The CV jack and attenuator beneath the slider allow positive or inverted voltage control of gain. "
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: VCF
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polymode_VCF-1597795476.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'This is a standard 24db per/octave voltage-controlled lowpass filter along with a dedicated envelope generator for cutoff frequency control. Being a lowpass filter, it removes high frequencies as its cutoff frequency setting is decreased from max. Note that '
      -
        type: text
        marks:
          -
            type: bold
        text: 'this is a single filter for all voices'
      -
        type: text
        text: ', sometimes referred to as a "paraphonic" implementation. This means that it''s global for all notes, and the VCF envelope will retrigger any time a new note is played. This isn''t so great for piano, clav, or other percussive sounds, but it''s not too much of an issue for sustained pad, string, or organ-type sounds. The VCF and VCF Envelope controls are as follows:'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Frequency '
      -
        type: text
        text: '- Sets the frequency where high-frequency attenuation begins. The CV jack and attenuator beneath the slider allow positive or inverted voltage control of cutoff frequency. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
          -
            type: italic
        text: 'A note about max cutoff frequency: '
      -
        type: text
        text: 'If the cutoff frequency is open all the way, the sound still won''t be at full brightness; in other words, some high frequencies are still attenuated. Full filter brightness can be achieved by using the VCF Envelope (detailed in the next section), or by adding CV from the a mod source via the cutoff frequency '
      -
        type: text
        marks:
          -
            type: italic
        text: CV
      -
        type: text
        text: ' jack. This was done to accurately emulate the behavior of a real Polymoog VCF - in fact, a lot of vintage analog synths work this way. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Emph (Resonance)'
      -
        type: text
        text: '- Emphasizes sound energy at and around the current cutoff frequency by adding feedback from the filter''s output back to its input. Useful for typical synth "wah" sounds. The CV jack and attenuator beneath the slider allow positive or inverted voltage control of resonance amount.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Mod - Rate/Amount '
      -
        type: text
        text: '- The VCF section includes an independent triangle-wave LFO that''s hard-wired to frequency modulation. The '
      -
        type: text
        marks:
          -
            type: italic
        text: Rate
      -
        type: text
        text: ' slider controls LFO speed, and the '
      -
        type: text
        marks:
          -
            type: italic
        text: Amount
      -
        type: text
        text: ' slider controls LFO depth. The CV jacks and attenuators beneath the sliders allow positive or inverted voltage control of the slider amounts.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Mod - S&H (Sample and Hold) '
      -
        type: text
        text: '- Applies sample and hold (aka, random) modulation to the cutoff frequency. The sample and hold rate is controlled by the same clock as the triangle-wave LFO above, thus its rate is set with the same '
      -
        type: text
        marks:
          -
            type: italic
        text: Rate
      -
        type: text
        text: ' control. The triangle-wave LFO and S&H can simultaneously modulate the cutoff frequency as desired. The CV jacks and attenuators beneath the sliders allow positive or inverted voltage control of the slider amounts.'
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'VCF Envelope'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polymode_VCFenv.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The VCF Envelope exclusively controls the VCF described above. Its controls are as follow:'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Amt (Amount)'
      -
        type: text
        text: '- Defines the depth of envelope control of VCF cutoff. A setting of 0 has no effect on cutoff frequency; a setting of 10 would be maximum control. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Att (Attack)'
      -
        type: text
        text: '- Defines the length of time for VCF cutoff mod voltage to rise from minimum to maximum.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'D/R (Decay/Release)'
      -
        type: text
        text: '- Defines the length of time for VCF cutoff mod voltage to fall from the '
      -
        type: text
        marks:
          -
            type: italic
        text: Att
      -
        type: text
        text: "\_stage peak to "
      -
        type: text
        marks:
          -
            type: italic
        text: Sus
      -
        type: text
        text: "\_stage setting (key held) or fall to zero (key released). "
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Sus (Sustain)'
      -
        type: text
        text: '- Sets the held VCF cutoff mod voltage following '
      -
        type: text
        marks:
          -
            type: italic
        text: Att
      -
        type: text
        text: "\_and "
      -
        type: text
        marks:
          -
            type: italic
        text: D/R
      -
        type: text
        text: "\_phases (key held)."
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Mode Filters'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polymode_modeFilters.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'On the original Polymoog these buttons allowed selection of hard-wired sound presets; in addition to changing waveform, octave, and envelope parameters, the numbered preset buttons also routed audio through fixed filter circuits. Each preset had its own custom fixed filter board, known as a "mode filter." (We weren''t kidding when we said Polymoogs have a lot of filtering options.) Unlike a typical synth filter, they have no external controls and they aren''t voltage controllable, so they can''t change timbre over time. It''s best to think of the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Mode Filters'
      -
        type: text
        text: ' as preset EQ curves.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Given Voltage Modular''s sophisticated factory and user preset browser, we felt it would be redundant (and potentially confusing) for the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Mode '
      -
        type: text
        text: 'preset buttons to affect all of Polymodes controls, so please keep in mind that the '
      -
        type: text
        marks:
          -
            type: bold
          -
            type: italic
        text: 'Mode filter names refer only to the mode filters themselves, not entire sound patches'
      -
        type: text
        text: ' (the entire factory presets are accurately reproduced and appear as the first nine presets in the standard Voltage Modular Polymode Presets bank). '
  -
    type: paragraph
    content:
      -
        type: text
        text: 'There were actually two original Polymoog models - the 203A, which is the full-tilt boogie version with numerous controls, and eight sound presets/mode filters. A couple of years later, a less expensive, cut-down version (model 280a) was released., but it increased the number of presets (and mode filters) to 14. Generally speaking, the 280A is less desirable, but it featured the aforementioned "Vox Humana" preset, made famous by new wave icon, Gary Numan. As a result, many Polymoog 203A owners have their instruments modified to eliminate one of the lesser presets and replace it with the Vox Humana settings and mode filter PCB. We''ve essentially done this in the Polymode module - it retains all eight of the standard Polymoog mode filter presets and adds Vox Humana as a ninth "extra" preset.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'To use the '
      -
        type: text
        marks:
          -
            type: bold
          -
            type: italic
        text: Mode
      -
        type: text
        marks:
          -
            type: bold
        text: ' filters, simply select one and raise the '
      -
        type: text
        marks:
          -
            type: bold
          -
            type: italic
        text: Mode
      -
        type: text
        marks:
          -
            type: bold
        text: ' slider in the '
      -
        type: text
        marks:
          -
            type: bold
          -
            type: italic
        text: 'Master Gain '
      -
        type: text
        marks:
          -
            type: bold
        text: 'section. '
      -
        type: text
        text: 'The LED numeric indicator displays the currently selected mode filter. As mentioned, switching mode filters won''t affect other parameters. '
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Master Gain (Mixer)'
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polymode_mastGain.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Master Gain '
      -
        type: text
        text: 'section is where all Polymode signals are mixed.'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Dir (Direct)'
      -
        type: text
        text: '- Sets '
      -
        type: text
        marks:
          -
            type: italic
        text: Direct
      -
        type: text
        text: ' signal output amount. This signal is the combination of both oscillator ranks, following the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Rank Mix'
      -
        type: text
        text: ' slider and prior to any of the filters. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Mode
      -
        type: text
        text: '- Sets the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Mode Filters '
      -
        type: text
        text: 'output level. The CV jack and attenuator beneath the slider allow positive or inverted voltage control of '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Mode Filter '
      -
        type: text
        text: level.
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: VCF
      -
        type: text
        text: '- Sets the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'VCF '
      -
        type: text
        text: 'output level. The CV jack and attenuator beneath the slider allow positive or inverted voltage control of '
      -
        type: text
        marks:
          -
            type: italic
        text: 'VCF '
      -
        type: text
        text: level.
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Res (Resonators)'
      -
        type: text
        text: '- Sets the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Resonators '
      -
        type: text
        text: 'output level. The CV jack and attenuator beneath the slider allow positive or inverted voltage control of '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Resonators '
      -
        type: text
        text: level.
  -
    type: heading
    attrs:
      level: 2
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Outputs
  -
    type: set
    attrs:
      values:
        type: image
        image:
          - ug_polymode_outputs.jpg
        alignment: left
        add_shadow: false
  -
    type: paragraph
    content:
      -
        type: text
        text: 'From the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Master Gain'
      -
        type: text
        text: ' section, signals travel to the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Outputs '
      -
        type: text
        text: 'section. The '
      -
        type: text
        marks:
          -
            type: italic
        text: Mode
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: italic
        text: VCF
      -
        type: text
        text: ', and '
      -
        type: text
        marks:
          -
            type: italic
        text: Resonators
      -
        type: text
        text: ' individual output levels are affected by '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Master Gain '
      -
        type: text
        text: 'mixer levels. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Dir (Direct)'
      -
        type: text
        text: '- This signal is the combination of both oscillator ranks, following the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Rank Mix'
      -
        type: text
        text: ' slider and prior to any of the filters. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Mode
      -
        type: text
        text: '- '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Mode Filters '
      -
        type: text
        text: 'direct out. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: VCF
      -
        type: text
        text: '- '
      -
        type: text
        marks:
          -
            type: italic
        text: 'VCF '
      -
        type: text
        text: 'direct out. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Res (Resonators)'
      -
        type: text
        text: '- '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Resonators '
      -
        type: text
        text: 'direct out. '
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Mix and Volume knob'
      -
        type: text
        text: '- This the master summed output from the '
      -
        type: text
        marks:
          -
            type: italic
        text: 'Master Gain '
      -
        type: text
        text: 'mix. The master mix level is set with the volume knob above the jack. '
template: modules
blueprint: modules
meta_description: 'The Boolean Logic module is a dual module that combines two incoming gate signals using the common boolean functions AND, NAND, NOR, OR, XOR, and XNOR.'
social_image: social-modules/boolean-logic.jpg
updated_at: 1604365137
updated_by: a0ce54e0-bf71-4d4c-a5b9-7182705c1bfa
id: a70ab07e-dc88-4661-893f-d374d6bcdd8f
---
