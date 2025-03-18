<?php

namespace Gtmassey\Wrapsheet\Models;

use Carbon\Carbon;
use Illuminate\Support\Collection;

class Sheet
{
    public int $id;

    public string $name;

    public int $version;

    public int $totalRowCount;

    public string $accessLevel;

    /**
     * @var string[]
     */
    public array $effectiveAttachmentOptions;

    public bool $ganttEnabled;

    public bool $dependenciesEnabled;

    public bool $resourceManagementEnabled;

    public string $resourceManagementType;

    public bool $cellImageUploadEnabled;

    /**
     * @var string[]
     */
    public array $userSettings;

    /**
     * @var string[]
     */
    public array $userPermissions;

    public Workspace $workspace;

    public bool $hasSummaryFields;

    public string $permalink;

    public Carbon $createdAt;

    public Carbon $modifiedAt;

    public bool $isMultiPicklistEnabled;

    // public Collection $columns;

    // public Collection $rows;

    /**
     * @param  array<string, mixed>  $data
     */
    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->version = $data['version'];
        $this->totalRowCount = $data['totalRowCount'];
        $this->accessLevel = $data['accessLevel'];
        $this->effectiveAttachmentOptions = $data['effectiveAttachmentOptions'];
        $this->ganttEnabled = $data['ganttEnabled'];
        $this->dependenciesEnabled = $data['dependenciesEnabled'];
        $this->resourceManagementEnabled = $data['resourceManagementEnabled'];
        $this->resourceManagementType = $data['resourceManagementType'];
        $this->cellImageUploadEnabled = $data['cellImageUploadEnabled'];
        $this->userSettings = $data['userSettings'];
        $this->userPermissions = $data['userPermissions'];
        $this->workspace = Workspace::from($data['workspace']);
        $this->hasSummaryFields = $data['hasSummaryFields'];
        $this->permalink = $data['permalink'];
        $this->createdAt = Carbon::fromSerialized($data['createdAt']);
        $this->modifiedAt = Carbon::fromSerialized($data['modifiedAt']);
        $this->isMultiPicklistEnabled = $data['isMultiPicklistEnabled'];
        // $this->columns = collect();
        // $this->rows = collect();
        // $this->columns = $data['columns'];
        // $this->rows = $data['rows'];
    }

    /**
     * @param  array<string, mixed>  $data
     * @return self
     */
    public static function from(array $data)
    {
        return new self($data);
    }
}
