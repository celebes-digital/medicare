<div>
    <livewire:pemeriksaan.poliklinik.detail-pemeriksaan-poliklinik :$kunjungan lazy />
    <x-card>
        <x-tabs
            wire:model="selectedTab"
            active-class="text-white rounded bg-primary"
            label-class="font-semibold"
            label-div-class="p-2 rounded bg-primary/5"
        >
            <x-tab name="anamnesis" label="Anamnesis">
                {{-- <div
                    x-data="{
                        keluhanUtama: true,
                        keluhanPenyerta: true,
                    }" 
                >
                    <x-collapse x-model="keluhanUtama">
                        <x-slot:heading>
                            Keluhan Utama
                        </x-slot:heading>
                        <x-slot:content>
                            <x-textarea
                                label=""
                                wire:model="bio"
                                placeholder="Tuliskan keluhan utama pasien"
                                hint="Max 1000 chars"
                                rows="4"
                            />
                        </x-slot:content>
                    </x-collapse>
                </div> --}}
            </x-tab>
            <x-tab name="klinis" label="Pemeriksaan Klinis">
                <div>Klinis</div>
            </x-tab>
            <x-tab name="diagnosa" label="Diagnosa">
                <div>Diagnosa</div>
            </x-tab>
            <x-tab name="riwayatDiagnosa" label="Riwayat Diagnosa">
                <div>Riwayat Diagnosa</div>
            </x-tab>
            <x-tab name="tindakanMedis" label="Tindakan Medis">
                <div>Tindakan Medis</div>
            </x-tab>
            <x-tab name="resumeMedis" label="Resume Medis">
                <div>Resume Medis</div>
            </x-tab>
        </x-tabs>
    </x-card>
</div>
