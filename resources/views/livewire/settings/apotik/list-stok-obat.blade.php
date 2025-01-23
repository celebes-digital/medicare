<div>
    <x-card title="{{ $cardTitle }}" separator shadow progress-indicator>
		<div>Nama Obat <span class="text-lime-600">{{ $namaObat }}</span></div>

		<div>Stok <span class="text-lime-600">{{ $stokObat }}</span></div>

        <x-slot:menu>
			<x-button link="/settings/apotik/daftar-obat" icon="o-squares-2x2" label="Daftar Obat" class="btn-sm bg-lime-200" />
		</x-slot:menu>

		@php
			$headers = [
				['key'	=> 'nomor', 'label' => 'NOMOR', 'class' => 'w-1/12'],
				['key'	=> 'tgl_restok', 'label' => 'TGL. RESTOK', 'class' => 'w-auto'],
				['key'	=> 'stok_sebelumnya', 'label' => 'STOK SEBELUMNYA', 'class' => 'w-1/12 text-right'],
				['key'	=> 'stok_ditambahkan', 'label' => 'STOK DITAMBAHKAN', 'class' => 'w-1/12 text-right']
			];
		@endphp

		<x-table :headers="$headers" :rows="$listStok" with-pagination>
			<x-slot:empty>
				<x-icon name="o-cube" label="Belum ada data stok!" />
			</x-slot:empty>

			@scope('cell_tgl_restok', $stok)
				{{ dateHumanFormat($stok->tgl_restok) }}
			@endscope

			@scope('cell_nomor', $listStok)
				{{ $loop->index + 1 }}
			@endscope
		</x-table>

    </x-card>
</div>
