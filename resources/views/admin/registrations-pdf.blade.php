<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        @page {
            margin: 28px 32px;
        }

        body {
            font-family: 'Helvetica', Arial, sans-serif;
            color: #1e293b;
            font-size: 12px;
        }

        .header {
            display: table;
            width: 100%;
            margin-bottom: 18px;
            border-bottom: 2px solid #f97316;
            padding-bottom: 12px;
        }

        .header .brand {
            display: table-cell;
            vertical-align: middle;
        }

        .header .brand .mark {
            display: inline-block;
            width: 22px;
            height: 22px;
            background: #0f172a;
            color: #f97316;
            font-weight: bold;
            font-size: 12px;
            text-align: center;
            line-height: 22px;
            border-radius: 5px;
            margin-right: 6px;
        }

        .header .brand .name {
            font-size: 16px;
            font-weight: bold;
            color: #0f172a;
        }

        .header .meta {
            display: table-cell;
            vertical-align: middle;
            text-align: right;
            color: #64748b;
            font-size: 11px;
        }

        h1 {
            font-size: 18px;
            margin: 0 0 4px;
            color: #0f172a;
        }

        .subtitle {
            color: #64748b;
            margin: 0 0 16px;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            background: #0f172a;
            color: #ffffff;
            text-align: left;
            padding: 8px 10px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        tbody td {
            padding: 7px 10px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 11px;
        }

        tbody tr:nth-child(even) {
            background: #f8fafc;
        }

        .footer {
            margin-top: 18px;
            color: #94a3b8;
            font-size: 10px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="brand">
            <span class="mark">C</span>
            <span class="name">Certicode</span>
        </div>
        <div class="meta">
            Generated {{ $generatedAt->format('M j, Y \a\t g:i A') }}
        </div>
    </div>

    <h1>Event Registrations</h1>
    <p class="subtitle">{{ $registrations->count() }} total registration{{ $registrations->count() === 1 ? '' : 's' }}</p>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Location</th>
                <th>Organization/School</th>
                <th>Registered</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($registrations as $registration)
                <tr>
                    <td>{{ $registration->full_name }}</td>
                    <td>{{ $registration->email }}</td>
                    <td>{{ $registration->contact_number }}</td>
                    <td>{{ $registration->location }}</td>
                    <td>{{ $registration->organization }}</td>
                    <td>{{ $registration->created_at?->format('M j, Y g:i A') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align:center; color:#94a3b8; padding:16px;">No registrations yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <p class="footer">Certicode &middot; Registrations report</p>
</body>
</html>
